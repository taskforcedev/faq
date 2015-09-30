<?php namespace Taskforcedev\Faq\Http\Controllers;

use Taskforcedev\LaravelSupport\Http\Controllers\Controller;
use Taskforcedev\Faq\Database\Migrator;

class InstallController extends Controller
{
    public function install()
    {
        $migrator = new Migrator();
        $migrator->migrate();

        return view('laravel-faq::install.complete');
    }
}
