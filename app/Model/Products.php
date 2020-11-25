<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    protected $table='Products';
    protected $fillable=["ProductName","id","Img","Description","Qty","Price"];

    public function categories(){
        return $this->belongsTo('App\Model\Categories','id');
    }
}


