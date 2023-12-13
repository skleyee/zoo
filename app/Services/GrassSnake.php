<?php

namespace App\Services;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GrassSnake extends Reptile
{
    protected $attributes  = [
        'type' => 'GrassSnake',
        'isToxic' => false,
    ];
    use HasFactory;
}
