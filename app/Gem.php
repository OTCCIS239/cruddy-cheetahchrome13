<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gem extends Model
{
    // protected $guarded = ['id'];
    protected $fillable = [
        'name',
        'type',
        'cut',
        'size',
        'description',
        'price',
        'stock',
        'img',
    ];
}
