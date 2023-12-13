<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OrganismSeeder extends Seeder
{

    public function run(): void
    {
        $organisms = [
            [
                'name' => 'Gazelle1',
                'type' => 'Gazelle',
                'gender' => 'Male',
                'satiety' => 80,
                'age' => 5,
                'isAlive' => true,
                'isToxic' => false,
                'reproductionType' => 'Live born',
                'foodType' => 'Grass',
                'biography' => json_encode(''),
                'enclosure_id' => 1,
            ],
            [
                'name' => 'Bear1',
                'type' => 'Bear',
                'gender' => 'Female',
                'satiety' => 20,
                'age' => 3,
                'isAlive' => true,
                'isToxic' => false,
                'reproductionType' => 'Live born',
                'foodType' => 'Omnivore',
                'biography' => json_encode(''),
                'enclosure_id' => 1,
            ],
            [
                'name' => 'Alligator1',
                'type' => 'Alligator',
                'gender' => 'male',
                'satiety' => 25,
                'age' => 6,
                'isAlive' => true,
                'isToxic' => false,
                'reproductionType' => 'Eggs',
                'foodType' => 'Predator',
                'biography' => json_encode(''),
                'enclosure_id' => 1,
            ],
            [
                'name' => 'Penguin1',
                'type' => 'Penguin',
                'gender' => 'Female',
                'satiety' => 30,
                'age' => 2,
                'isAlive' => true,
                'isToxic' => false,
                'reproductionType' => 'Eggs',
                'foodType' => 'Omnivore',
                'biography' => json_encode(''),
                'enclosure_id' => 1,
            ],
            [
                'name' => 'Tarantula1',
                'type' => 'Tarantula',
                'gender' => 'male',
                'satiety' => 60,
                'age' => 3,
                'isAlive' => true,
                'isToxic' => true,
                'reproductionType' => 'Eggs',
                'foodType' => 'Predator',
                'biography' => json_encode(''),
                'enclosure_id' => 1,
            ],
            [
                'name' => 'Parrot1',
                'type' => 'Parrot',
                'gender' => 'Female',
                'satiety' => 50,
                'age' => 2,
                'isAlive' => true,
                'isToxic' => false,
                'reproductionType' => 'Eggs',
                'foodType' => 'Omnivore',
                'biography' => json_encode(''),
                'enclosure_id' => 1,
            ],
            [
                'name' => 'MadagascarCockroach1',
                'type' => 'MadagascarCockroach',
                'gender' => 'Female',
                'satiety' => 80,
                'age' => 1,
                'isAlive' => true,
                'isToxic' => false,
                'reproductionType' => 'Eggs',
                'foodType' => 'Omnivore',
                'biography' => json_encode(''),
                'enclosure_id' => 1,
            ],
            [
                'name' => 'Wolf1',
                'type' => 'Wolf',
                'gender' => 'Female',
                'satiety' => 10,
                'age' => 5,
                'isAlive' => true,
                'isToxic' => false,
                'reproductionType' => 'Live born',
                'foodType' => 'Predator',
                'biography' => json_encode(''),
                'enclosure_id' => 1,
            ],
            [
                'name' => 'Platypus1',
                'type' => 'Platypus',
                'gender' => 'Female',
                'satiety' => 30,
                'age' => 6,
                'isAlive' => true,
                'isToxic' => true,
                'reproductionType' => 'Eggs',
                'foodType' => 'Omnivore',
                'biography' => json_encode(''),
                'enclosure_id' => 1,
            ],
            [
                'name' => 'GrassSnake1',
                'type' => 'GrassSnake',
                'gender' => 'male',
                'satiety' => 50,
                'age' => 4,
                'isAlive' => true,
                'isToxic' => false,
                'reproductionType' => 'Eggs',
                'foodType' => 'Omnivore',
                'biography' => json_encode(''),
                'enclosure_id' => 1,
            ],
        ];

        DB::table('organisms')->insert($organisms);
    }
}
