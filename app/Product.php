<?php

namespace App;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use SoftDeletes;
    protected $dates = ['deleted_at'];

    const FEATURED = 1;

    protected $guarded = [];

    public function restaurant()
    {
        return $this->belongsTo('App\Restaurant');
    }

    public function category()
    {
        return $this->belongsTo('App\ProductCategory');
    }

    public function variants()
    {
        return $this->hasMany('App\Variant');
    }

    public function scopeFeatured(Builder $query)
    {
        return $query->where('featured', '=', static::FEATURED);
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }
}
