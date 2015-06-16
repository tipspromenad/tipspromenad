<?php

namespace App;

use App\User;
use App\Question;
use Illuminate\Database\Eloquent\Model;

class Tip extends Model
{
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
