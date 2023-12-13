<?php

namespace App\Services;

use App\Models\Organism;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

abstract class Animal extends Organism
{
    protected ?string $animalClass = null;

    public function getAnimalClass(): ?string
    {
        return $this->animalClass;
    }
    use HasFactory;
}
