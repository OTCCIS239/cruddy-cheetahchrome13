<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jewelry extends Model
{
    //protected $guarded = ['id'];
    protected $fillable = [
        'name',
        'type',
        'size',
        'description',
        'price',
        'stock',
        'img'
    ];
}
