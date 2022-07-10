<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
class Person extends Model
{
    //グローバルスコープ
    // protected static function boot()
    // {
    //     parent::boot();

    //     static::addGlobalScope('age', function (Builder $builder) {
    //         $builder->where('age', '>', 20);
    //     });
    // }
    protected $guarded = array('id');

    public static $rules = array(
       'name' => 'required',
       'mail' => 'email',
       'age' => 'integer|min:0|max:150'
    );

    public function getData()
    {
       return $this->id . ': ' . $this->name . ' (' . $this->age . ')';
    }

    public function scopeAgeGreaterThan($query, $n)
    {
        return $query->where('age','>=', $n);
    }

    public function scopeAgeLessThan($query, $n)
    {
        return $query->where('age', '<=', $n);
    }
    //hasMany結合
    public function boards()
    {
        return $this->hasMany('App\Board');
    }

    //subjectsテーブルとのhasOne結合
    public function subject()
    {
       return $this->hasOne('App\Http\Models\Subject');
    }

    //subjectsテーブルとのhasMany結合
    public function subjects()
    {
       return $this->hasMany('App\Http\Models\Subject');
    }
}
