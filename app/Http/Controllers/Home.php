<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class Home extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }
    public function index()
    {
        $pokemon = HTTP::get('https://pokeapi.co/api/v2/pokemon/1');
        return $pokemon;
        // return view("home", [
        // "pokemon" => json_decode($pokemon)
        // ]);
    }
}
