<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pizza extends Model
{
    // protected $table = 'pizzas';
    protected $casts = [
        'toppings' => 'array'  //save json data in daaabase in array format 
    ];
}
