<?php

namespace App\Services;

use App\Models\Organism;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

abstract class Bird  extends Organism
{
    protected bool $isFlying;

    public function isFlying(): bool
    {
        return $this->isFlying;
    }

    use HasFactory;
}
