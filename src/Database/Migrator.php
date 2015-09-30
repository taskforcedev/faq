<?php namespace Taskforcedev\Faq\Database;

use \Schema;

class Migrator
{
    public function migrate()
    {
        if ($this->tablesExist()) {
            return true;
        }
        $this->createQuestionsTable();
    }

    private function createQuestionsTable()
    {
        if (!Schema::hasTable('faq_questions')) {
            Schema::create('faq_questions', function ($table) {
                $table->increments('id');
                $table->string('question', 500);
                $table->string('answer', 5000);
                $table->timestamps();
            });
        }
    }

    private function tablesExist()
    {
        $tables = [ 'faq_questions' ];
        foreach ($tables as $t) {
            if (!Schema::hasTable($t)) {
                return false;
            }
        }
        return true;
    }
}
