<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Variant extends Model
{
    protected $guarded = [];

    public function product()
    {
        return $this->belongsTo('App\Product');
    }

    public function variantOptions()
    {
        return $this->hasMany('App\VariantOption');
    }

}
