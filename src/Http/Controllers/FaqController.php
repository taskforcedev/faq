<?php namespace Taskforcedev\Faq\Http\Controllers;

class FaqController extends BaseController
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
