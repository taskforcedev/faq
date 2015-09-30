<?php namespace Taskforcedev\Faq\Http\Controllers;

use Taskforcedev\LaravelSupport\Http\Controllers\Controller;

class FaqController extends Controller
{
    /**
     * Paginated list of questions with answers.
     * @return mixed
     */
    public function index()
    {
        $data = $this->buildData();
        return view('laravel-faq::index', $data);
    }
}
