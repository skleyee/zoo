<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Organism extends Model
{

    protected bool $isToxic             = false;
    protected ?string $reproductionType = null;
    protected ?string $foodType         = null;
    protected string $type;
    protected string $name;
    protected string $gender;
    protected int $satiety;
    protected int $age;
    protected bool $isAlive;
    protected int $enclosure_id;

    protected $fillable = [
        'name',
        'type',
        'gender',
        'satiety',
        'age',
        'isAlive',
        'biography',
        'enclosure_id',
    ];

    protected $attributes = [
        'isToxic' => false,
    ];

    public function __construct($name, $gender, $satiety, $age, $isAlive, $enclosure_id)
    {
        $this->name = $name;
        $this->gender = $gender;
        $this->satiety = $satiety;
        $this->age = $age;
        $this->isAlive = $isAlive;
        parent::__construct([
            'name' => $name,
            'gender' => $gender,
            'satiety' => $satiety,
            'age' => $age,
            'isAlive' => $isAlive,
            'enclosure_id' => $enclosure_id,
        ]);
    }

    public function isToxic(): bool
    {
        return $this->isToxic;
    }

    public function getReproductionType(): ?string
    {
        return $this->reproductionType;
    }

    public function getType(): ?string
    {
        return $this->type;
    }

    public function getFoodType(): ?string
    {
        return $this->foodType;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getGender(): string
    {
        return $this->gender;
    }

    public function getSatiety(): string
    {
        return $this->satiety . '%';
    }

    public function getAge(): int
    {
        return $this->age;
    }

    public function isAlive(): bool
    {
        return $this->isAlive;
    }

    public function cronActions()
    {
        if (isset($this->attributes['biography']))
            $this->attributes['biography'] = json_decode($this->attributes['biography']);
        $this->increaseAge();
        $this->decreaseSatiety();
        $this->increaseSatiety();
        $this->move();
        $this->reproduce();
        $this->attributes['biography'] = json_encode($this->attributes['biography']);
    }

    public function increaseAge()
    {
        $this->logEvent('Got older');
    }

    public function decreaseSatiety()
    {
        $this->logEvent('Got hungrier');
    }

    public function increaseSatiety()
    {
        $this->logEvent('Ate');
    }

    public function move()
    {
        $this->logEvent('Moved');
    }

    public function reproduce()
    {
        $this->logEvent('Reproduced');
    }

    public function logEvent($event)
    {
        $this->attributes['biography'][] = [
            'event'     => $event,
            'time'      => now(),
        ];
    }

    use HasFactory;
}
