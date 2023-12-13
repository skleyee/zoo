<?php

namespace App\Services;

use App\Models\Organism;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

abstract class Insect  extends Organism
{
    use HasFactory;
}
