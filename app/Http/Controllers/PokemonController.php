<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use App\Models\Pokemon;

class PokemonController extends Controller
{
    public static function index()
    {
        $client = new Client([
            'base_uri' => 'https://pokeapi.co/api/v2/',
            'timeout' => 3.0,
        ]);
            $num = rand(1, 600);
            $url = 'pokemon/' . $num;
            $response = $client->request('GET', $url, ['verify' => false]);
            $pokemon = json_decode($response->getBody()->getContents());
            // GUARDAR EN BD
            $pokemonDB = new Pokemon;
            $pokemonDB->name = $pokemon->name;
            $pokemonDB->image = $pokemon->sprites->front_default;
            $pokemonDB->save();
            // FIN GUARDAR EN BD
            return view('pokemon', compact('pokemon'));
    }

    public function showAllPokemons()
    {
        // $pokemons = Pokemon::all();
        $pokemons = Pokemon::paginate(12);
        return view('show', ['pokemons' => $pokemons]);
    }

}
