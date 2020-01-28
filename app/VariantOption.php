<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class VariantOption extends Model
{
    protected $guarded = [];


    public function variant()
    {
        return $this->belongsTo('App\Variant');
    }

}
