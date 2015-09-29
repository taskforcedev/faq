<?php namespace Taskforcedev\Faq\Models;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    public $table = 'faq_questions';

    protected $fillable = ['question', 'answer'];
}
