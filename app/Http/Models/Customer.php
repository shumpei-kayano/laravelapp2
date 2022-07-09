<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $guarded = [
        'id',
    ];
    
    public static $rules = [
        'name' => 'required',
        'address' => 'string',
        'mail' => 'email',
        'age' => 'numeric|min:0|max:150',
        'hobby' => 'string',
    ];

    public function getData()
    {
       return $this->id . ': ' . $this->name . ' (' . $this->age . ')';
    }
 
}
