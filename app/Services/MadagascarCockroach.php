<?php

namespace App\Services;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MadagascarCockroach extends Insect
{
    protected $attributes  = [
        'type' => 'MadagascarCockroach',
        'isToxic' => false,
    ];
    use HasFactory;
}
