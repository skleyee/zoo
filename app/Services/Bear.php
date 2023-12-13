<?php

namespace App\Services;

use App\Models\Organism;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bear extends Mammal
{
    protected $attributes               = [
        'type'             => 'Bear',
        'isToxic'          => false,
        'reproductionType' => 'Live born',
        'foodType'         => 'Omnivore'
    ];
    use HasFactory;

}
