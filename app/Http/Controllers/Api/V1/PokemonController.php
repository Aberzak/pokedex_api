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
        $pokemons = Pokemon::with('sprites','pokemonTypes','pokemonMoves','pokemonStats','pokemonAbilities')->get();
        
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
        return new PokemonDetailResource($pokemon->loadMissing('sprites','pokemonTypes','pokemonMoves','pokemonStats','pokemonAbilities'));
    }

    /**
     * Display a listing of Pokemon with queryfilter.
     *
     * @return \Illuminate\Http\Response
     */
    public function search(Request $request)
    {
        $key = $request->query('query');
        $limit = $request->query('limit');

        $pokemons = Pokemon::with('sprites','pokemonTypes')
                    ->whereHas('pokemonTypes', function($q) use($key){
                        $q->whereHas('Type',function($q2) use($key){
                            $q2->where('name','LIKE','%'.$key.'%');
                        });
                    })
                    ->get();
    
        return new PokemonCollection( $pokemons );
    }
}
