<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Metal extends Model
{
    // protected $guarded = ['id'];
    protected $fillable = [
        'name',
        'type',
        'form',
        'description',
        'price',
        'stock',
        'img'
    ];
}
