<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $guarded = array('id');
    public static $rules = array(
        'title' => 'required',
        'work' => 'required'
    );
    
    public function getData()
    {
        return '【'.$this->title.'】 '.$this->work;
    }
}
