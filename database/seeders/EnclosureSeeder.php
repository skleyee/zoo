<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EnclosureSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $enclosures = [
            [
                'isOpen'     => true,
                'isUnlocked' => true,
                'haveRoof'   => false,
                'foodAmount' => 4000,
            ],
            [
                'isOpen'     => false,
                'isUnlocked' => false,
                'haveRoof'   => true,
                'foodAmount' => 2000,
            ]
        ];

        DB::table('enclosures')->insert($enclosures);
    }
}
