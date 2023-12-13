<?php

namespace App\Services;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Parrot extends Bird
{
    protected bool $isFlying = true;
    protected $attributes    = [
        'type' => 'Parrot',
        'isToxic' => false,
    ];
    use HasFactory;
}
