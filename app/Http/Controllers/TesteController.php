<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TesteController extends Controller
{

    public function teste(int $p1, int $p2){
        echo $p1 + $p2;
    }

}
