<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class Person extends Model
{
    public function getData()
    {
        //test
        return $this->id . ': ' . $this->name . ' (' . $this->age . ')';
    }

}
