<?php

namespace App\Services;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

abstract class Mammal extends Animal
{
    protected ?string $animalClass = 'Mammal';

    use HasFactory;
}
