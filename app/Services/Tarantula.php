<?php

namespace App\Services;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tarantula extends Insect
{
    protected $attributes   = [
        'type' => 'Tarantula',
        'isToxic' => true,
    ];
    use HasFactory;
}
