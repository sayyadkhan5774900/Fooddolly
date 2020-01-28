<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Restaurant extends Model
{
    use SoftDeletes;
    protected $dates = ['deleted_at'];

    protected $guarded = [];

    public function cuisines()
    {
        return $this->belongsToMany('App\Cuisine');
    }

    public function products()
    {
        return $this->hasMany('App\Product');
    }

    public function restaurateur()
    {
        return $this->belongsTo('App\User');
    }
}
