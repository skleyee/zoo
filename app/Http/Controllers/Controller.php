<?php

namespace App\Http\Controllers;

use App\Services\Alligator;
use App\Models\Organism;
use App\Services\Animal;
use App\Services\Bear;
use App\Services\Gazelle;
use App\Services\GrassSnake;
use App\Services\MadagascarCockroach;
use App\Services\Parrot;
use App\Services\Penguin;
use App\Services\Platypus;
use App\Services\Tarantula;
use App\Services\Wolf;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\DB;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function test()
    {

        $organism = new Bear('Misha', 'male', 50, 4, true, 1);

        $organism->cronActions();
        $organism->cronActions();


        dd(DB::table('organisms')->insert($organism->getAttributes()));
    }

}
