<?php

namespace App\Services;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alligator extends Reptile
{
    protected $attributes               = [
        'type'             => 'Alligator',
        'isToxic'          => false,
        'reproductionType' => 'Eggs',
        'foodType'         => 'Predator'
    ];
    use HasFactory;
}
