<?php

namespace App;

use App\User;
use App\Question;
use Illuminate\Database\Eloquent\Model;

class Tip extends Model
{
    public function snippet($attr, $max = 10, $strip = true)
    {
        $string = $this->$attr;
        ($strip) ? $string = strip_tags($string) : '';
        $snippet = substr($string, 0, $max);
        $snippet .= "...";
        return $snippet;
    }

    /**
     * en tipspromenad hasMany questions
     * @return Question::class (alla frågor som är sparade till tipspromenaden)
     */
    public function questions()
    {
        return $this->belongsToMany(Question::class)->withTimestamps();
    }

    /**
     * en tipspromenad belongsTo a user
     * @return User::class (den User som skapade tipspromenaden (om det finns någon))
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
