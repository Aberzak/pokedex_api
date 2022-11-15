<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Resources\V1\TeamCollection;
use App\Http\Resources\V1\TeamResource;
use App\Models\Team;
use Illuminate\Http\Request;
use App\Http\Requests\V1\StoreTeamRequest;
use App\Http\Requests\V1\StoreTeamPokemonRequest;
use App\Models\Pokemon;
use App\Models\TeamPokemon;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Validator;

class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        return new TeamCollection( Team::with('pokemons')->get());
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
     * @param  \App\Models\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function show(Team $team)
    {
        return new TeamResource( $team->loadMissing('pokemons'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreTeamRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function storeTeam(StoreTeamRequest $request)
    {
        return new TeamResource(Team::create($request->all()));
    }

        /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storeTeamPokemon(Team $team,Request $request)
    {

        $teamPokemons = TeamPokemon::where('team_id',$team->id)->get();
        $teamPokemonsIds = $teamPokemons->pluck('pokemon_id');
        $teamPokemonsCount = $teamPokemons->count();


        Validator::make($request->all() , [
            'pokemons' => ['required','array','max:'. 6-$teamPokemonsCount],
            'pokemons.*'=>['numeric',Rule::in(Pokemon::all()->pluck('id')),Rule::notIn($teamPokemonsIds),'distinct'],
        ])->validate();

        foreach($request->pokemons as $pokemonId){
            TeamPokemon::create([
                'team_id' => (int)$team->id,
                'pokemon_id' => (int)$pokemonId
            ]);
        }
        
        return new TeamResource($team->loadMissing('pokemons'));
    }
}
