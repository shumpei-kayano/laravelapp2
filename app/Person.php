<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Builder;
use App\Scopes\ScopePerson;

class Person extends Model
{
   protected $guarded = array('id');

   public static $rules = [
      'name' => 'required',
      'mail' => 'email',
      'age' => 'integer|min:0|max:150'
   ];

   // getDataは残しておく
   public function getData()
   {
      return $this->id . ': ' . $this->name . ' (' . $this->age . ')';
   }

   //リレーションの設定
   public function board()
    {
    return $this->hasOne('App\Board');
    }
}
