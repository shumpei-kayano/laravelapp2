<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Board extends Model
{
    protected $guarded = array('id');
  
    public static $rules = array(
       'person_id' => 'required',
       'title' => 'required',
       'message' => 'required'
   );

   public function getData()
   {
      return $this->id . ': ' . $this->title . ' (' 
         . $this->person->name . ')';
   }
   
   //リレーションの設定
    public function person()
    {
        return $this->belongsTo('App\Person');
    }
}
