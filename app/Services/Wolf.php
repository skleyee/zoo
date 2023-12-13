<?php

namespace App\Services;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Wolf extends Mammal
{
    protected $attributes = [
        'type'     => 'Wolf',
        'isToxic'  => false,
        'foodType' => 'Predator',
    ];
    use HasFactory;
}
