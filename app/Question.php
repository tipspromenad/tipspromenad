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
        return $this->belongsToMany(Tip::class)->withTimestamps();
    }

    /**
     * a question can belong to many tags
     * @return Tag::class (all the tags that is added to a qeustion)
     */
    public function tags()
    {
        return $this->belongsToMany(Tag::class)->withTimestamps();
    }

    /**
     * A question belongs to a user
     * @return User::class (the user that created the question (if there is one))
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

}
