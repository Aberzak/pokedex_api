<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Resources\V1\PokemonCollection;
use App\Http\Resources\V1\PokemonDetailResource;
use Illuminate\Http\Request;
use App\Models\Pokemon;
use Illuminate\Validation\Rule;

class PokemonController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $request->validate([
            'sort' =>['string',Rule::in(['name-asc','name-desc','id-asc','id-desc'])],
        ]);

        if($request->filled('sort')){
            $orderkey = explode('-',$request->query('sort'));
        }

        $pokemons = Pokemon::with('sprites','pokemonTypes','pokemonMoves','pokemonStats','pokemonAbilities');

        if(isset($orderkey)){
            $pokemons = $pokemons->orderby($orderkey[0],$orderkey[1]);
        }
          
        $pokemons = $pokemons->get();
        
        return new PokemonCollection( $pokemons );
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

    /**
     * Display a listing of Pokemon with queryfilter.
     *
     * @return \Illuminate\Http\Response
     */
    public function search(Request $request)
    {
        $request->validate([
            'query' =>['required','string','max:25'],
            'limit' =>['numeric']
        ]);

        $key = $request->query('query');
        $limit = $request->query('limit');

        if(isset($key)){
            $pokemons = Pokemon::with('sprites','pokemonTypes')
                        ->whereHas('pokemonTypes', function($q) use($key){
                            $q->whereHas('Type',function($q2) use($key){
                                $q2->where('name','LIKE','%'.$key.'%');
                            });
                        })->orWhere('name','LIKE','%'.$key.'%');
            
            if(isset($limit) && $limit>0){
                $pokemons->take($limit);
            }
                        

            $pokemons = $pokemons->get();

            return new PokemonCollection( $pokemons );
        }

        return false;
    }
}
