<?php namespace Taskforcedev\Faq\Http\Controllers;

class AdminController extends BaseController
{
    /**
     * Paginated list of questions with answers.
     * @return mixed
     */
    public function index()
    {
        $data = $this->buildData();
        return view('laravel-faq::admin.index', $data);
    }

    /**
     * Form to create a new QA.
     */
    public function create()
    {
        $data = $this->buildData();
        return view('laravel-faq::admin.create', $data);
    }

    /**
     * Store a question and it's associated answer.
     */
    public function store()
    {
        $data = Input::only('question', 'answer');
    }

    private function isAdmin()
    {
        
    }
}
