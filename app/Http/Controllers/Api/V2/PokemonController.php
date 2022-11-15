<?php

namespace App\Http\Controllers\Api\V2;

use App\Http\Controllers\Controller;
use App\Http\Resources\V2\PokemonCollection;
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
            'limit' =>['numeric'],
            'offset' =>['numeric'],
        ]);

        if($request->filled('sort')){
            $orderkey = explode('-',$request->query('sort'));
        }

        $pokemons = Pokemon::with('sprites','pokemonTypes','pokemonMoves','pokemonStats','pokemonAbilities');

        if(isset($orderkey)){
            $pokemons->orderby($orderkey[0],$orderkey[1]);
        }

        if($request->filled('limit')){
            $pokemons->take($request->query('limit'));
        }
      
        if($request->filled('offset')){
            $pokemons = $pokemons->paginate($request->query('offset'));
        }else{
            $pokemons = $pokemons->get();
        }
        
        return new PokemonCollection( $pokemons );
    }
}
