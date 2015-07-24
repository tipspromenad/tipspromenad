<?php

use App\Question;
use App\User;

Route::get('api/fragor', function ()
{
    $questions = Question::with(['user', 'tipspromenader'])->get();

    foreach ($questions as $question) {
        $question['tipspromenaderCount'] = $question->tipspromenaderCount();
        $question['created_at_diffForHumans'] = $question->created_at->diffForHumans();
    }
    return $questions;
});
