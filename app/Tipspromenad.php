<?php

namespace App;

use App\Question;
use App\User;
use Illuminate\Database\Eloquent\Model;

class Tipspromenad extends Model
{
      protected $casts = [
              'order_of_questions' => 'array',
          ];

       public $fillable = ['user_id', 'idCode', 'name', 'slug', 'desciption', 'unique_hash_id', 'showHelp', 'order_of_questions'];

       public function snippet($attr, $max = 10, $strip = true)
       {
           $string = $this->$attr;
           ($strip) ? $string = strip_tags($string) : '';
           $snippet = substr($string, 0, $max);
           $snippet .= "...";
           return $snippet;
       }

       public function syncQ($idArray)
       {
        $arrString = [];
        if(is_array($idArray)){
          foreach ($idArray as $val) {
            $arrString[] = (string)$val;
          }
        }
        else{
          $arrString = [(string)$idArray];
          $idArray = [$idArray];
        }

         return [ $this->questions()->sync($idArray), $this->order_of_questions = $arrString, $this->save() ];

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
