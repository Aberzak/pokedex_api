<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Resources\V1\PokemonCollection;
use App\Http\Resources\V1\PokemonDetailResource;
use Illuminate\Http\Request;
use App\Models\Pokemon;

class PokemonController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pokemons = Pokemon::with('sprites','types','moves','stats','abilities')->get();
        
        return new PokemonCollection( $pokemons );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pokemon  $pokemon
     * @return \Illuminate\Http\Response
     */
    public function show(Pokemon $pokemon)
    {
        return new PokemonDetailResource($pokemon->loadMissing('sprites','types','moves','stats','abilities'));
    }
}
