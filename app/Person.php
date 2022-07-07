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
    //hasOne結合
    public function boards()
    {
        return $this->hasMany('App\Board');
    }
}
