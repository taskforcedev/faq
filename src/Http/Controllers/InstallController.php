<?php namespace Taskforcedev\Faq\Http\Controllers;

use Taskforcedev\LaravelSupport\Http\Controller\Controller;
use Taskforcedev\Faq\Database\Migrator;

class InstallController extends Controller
{
    public function install()
    {
        $migrator = new Migrator();
        $migrator->migrate();
    }
}
