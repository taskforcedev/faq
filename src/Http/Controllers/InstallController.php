<?php namespace Taskforcedev\Faq\Http\Controllers;

use Taskforcedev\Faq\Database\Migrator;

class InstallController extends BaseController
{
    public function install()
    {
        $migrator = new Migrator();
        $migrator->migrate();
    }
}
