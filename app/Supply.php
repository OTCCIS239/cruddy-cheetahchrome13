<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Supply extends Model
{
    // protected $guarded = ['id'];
    protected $fillable = [
        'name',
        'type',
        'description',
        'price',
        'stock',
        'img'
    ];
}
