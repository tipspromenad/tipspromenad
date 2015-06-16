<?php

namespace App;

use App\Question;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    /**
     * A tag can belong to many Questions
     * @return Question::class (all the questions where the tag is set)
     */
    public function questions()
    {
        $this->belongsToMany(Question::class)->withTimestamps();
    }
}
