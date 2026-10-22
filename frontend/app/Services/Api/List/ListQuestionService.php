<?php

namespace App\Services\Api\List;

use App\Services\Api\LegacyShape;

class ListQuestionService
{
    public function list()
    {
        return LegacyShape::namedLookup('v1/lookups/questions', 'question_name');
    }

    public function filter($question_name)
    {
        foreach ($this->list() as $question) {
            if ((string) $question->id === (string) $question_name) {
                return $question;
            }
        }

        return null;
    }
}
