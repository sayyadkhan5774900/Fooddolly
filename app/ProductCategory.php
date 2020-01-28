<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ProductCategory extends Model
{
    use SoftDeletes;
    protected $dates = ['deleted_at'];

    protected $guarded = [];

    public function products()
    {
        return $this->hasMany('App\Product');
    }

    public function restaurant()
    {
        return $this->belongsTo('App\Restaurant');
    }
    
    public function parent()
    {
        return $this->belongsTo('App\ProductCategory', 'parent_id');
    }

}
