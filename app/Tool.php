<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tool extends Model
{
    protected $fillable = [
        'name',
        'type',
        'description',
        'price',
        'stock',
        'img'
    ];
}
