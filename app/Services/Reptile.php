<?php

namespace App\Services;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

abstract class Reptile extends Animal
{
    protected ?string $animalClass = 'Reptile';

    use HasFactory;
}
