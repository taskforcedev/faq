<?php namespace Taskforcedev\Faq\Http\Controllers;

use \Schema;
use Illuminate\Routing\Controller;
use Illuminate\Console\AppNamespaceDetectorTrait;

/**
 * Class BaseController
 * @package Taskforcedev\LaravelForum\Http\Controllers
 */
class BaseController extends Controller
{
    use AppNamespaceDetectorTrait;

    public function getLayout()
    {
        return config('laravel-faq.layout');
    }

    protected function buildData()
    {
        return [
            'layout' => $this->getLayout(),
            'admin' => $this->canAdministrate();
        ];
    }

    /**
     * Returns the user object (or guest).
     * @return object
     */
    public function getUser()
    {
        return (Auth::check() ? \Auth::user() : $this->guest());
    }

    /**
     * Determine if the user can administrate the forums
     * @return boolean
     */
    protected function canAdministrate()
    {
        $user = $this->getUser();
        if ($user->name == 'Guest' && $user->email == 'guest@example.com') {
            return false;
        }
        if (method_exists($user, 'isAdmin')) {
            return $user->isAdmin();
        }
        if (method_exists($user, 'can')) {
            return $user->can('administrate');
        }
        // If no method of authorizing return false;
        return false;
    }

    /**
     * Retrieve a user model or object for the Guest user.
     * @return object
     */
    private function guest()
    {
        /* Get the namespace */
        $model = $this->getUserModel();
        if ($model) {
            $guest = new $model();
            $guest->name = 'Guest';
            $guest->email = 'guest@example.com';
        } else {
            $guest = (object)['name' => 'Guest', 'email' => 'guest@example.com'];
        }
        return $guest;
    }

    /**
     * Attempt to retrieve the user model class name (namespaced).
     * @return boolean|string
     */
    public function getUserModel()
    {
        /* Get the namespace */
        $ns = $this->getAppNamespace();
        if ($ns) {
            /* Try laravel default convention (models in the app folder). */
            $model = $ns . 'User';
            if (class_exists($model)) {
                return $model;
            }
            /* Try secondary convention of having a models directory. */
            $model = $ns . 'Models\User';
            if (class_exists($model)) {
                return $model;
            }
        }
        return false;
    }
}
