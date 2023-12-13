<?php

namespace App\Services;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gazelle extends Mammal
{
    protected $attributes = [
        'type'             => 'Gazelle',
        'isToxic'          => false,
        'reproductionType' => 'Live born',
        'foodType'         => 'Grass',
    ];
    use HasFactory;
}
