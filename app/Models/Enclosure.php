<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Enclosure extends Model
{
    protected bool $isOpen;
    protected bool $isUnlocked;
    protected bool $haveRoof;
    protected int  $foodAmount;

    public function __construct($isOpen, $isUnlocked, $haveRoof, $foodAmount)
    {
        $this->isOpen     = $isOpen;
        $this->isUnlocked = $isUnlocked;
        $this->haveRoof   = $haveRoof;
        $this->foodAmount = $foodAmount;
    }

    public function addMeatToTheFeeder($meatAmount)
    {
        $this->foodAmount += $meatAmount;
    }

    public function addGrassToTheFeeder($grassAmount)
    {
        $this->foodAmount += $grassAmount;
    }

    use HasFactory;
}
