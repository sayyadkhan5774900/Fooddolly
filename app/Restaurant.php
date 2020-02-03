<?php

namespace App;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Restaurant extends Model
{
    use SoftDeletes;
    protected $dates = ['deleted_at'];

    const FEATURED = 1;


    protected $guarded = [];

    public function cuisines()
    {
        return $this->belongsToMany('App\Cuisine');
    }

    public function categories()
    {
        return $this->hasMany('App\ProductCategory')->whereNull('parent_id');
    }

    public function products()
    {
        return $this->hasMany('App\Product');
    }

    public function restaurateur()
    {
        return $this->belongsTo('App\User');
    }

    public function findProductBySlug($slug)
    {
        # code...
    }
    
    public static function findBySlug($slug)
    {
        return static::where('slug', $slug)->first();
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
