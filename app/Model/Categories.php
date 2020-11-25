<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
    protected $table="categories";
    protected $fillable=["CategoryName"];
    // "Photo","Description"

    public function products(){
        return $this->hasOne('App\Model\Categories','id');
    }
}
