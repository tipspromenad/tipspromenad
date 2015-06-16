<?php

namespace App;

use App\Tip;
use App\User;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    /**
     * a question can belong to many tipspromenader
     * @return Tip::class (all the tipspromenader where the question is added)
     */
    public function tips()
    {
        $this->belongsToMany(Tip::class)->withTimestamps();
    }

    /**
     * A question belongs to a user
     * @return User::class (the user that created the question (if there is one))
     */
    public function user()
    {
        $this->belongsTo(User::class);
    }

}
