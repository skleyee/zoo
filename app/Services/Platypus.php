<?php

namespace App\Services;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Platypus extends Mammal
{
    protected $attributes  = [
        'type'             => 'Platypus',
        'isToxic'          => true,
        'reproductionType' => 'Eggs',
    ];
    use HasFactory;
}
