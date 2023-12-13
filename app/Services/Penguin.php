<?php

namespace App\Services;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penguin extends Bird
{
    protected bool $isFlying = false;
    protected $attributes    = [
        'type' => 'Penguin',
        'isToxic' => false,
    ];
    use HasFactory;
}
