<?php

namespace Database\Seeders;

use App\Models\Abilitie;
use App\Models\Move;
use App\Models\MoveLearnMethod;
use App\Models\Pokemon;
use App\Models\Sprite;
use App\Models\Stat;
use App\Models\Type;
use App\Models\VersionGroup;
use App\Models\VersionGroupDetail;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class PokemonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $json = Storage::disk('public')->get('/json/pokemons.json');
        $pokemons = json_decode($json,true);
        
        $abilities = [];
        $moves = [];
        $moveLearnMethods = [];
        $versionGroups = [];
        $types = [];
        $stats = [];
        
        foreach ( $pokemons as $pokemonData){

            $pokemon = Pokemon::firstOrCreate(
                [
                    'id' => $pokemonData['id'],
                    'name' => $pokemonData['name'],
                    'height' => $pokemonData['height'],
                    'weight' => $pokemonData['weight'],
                    'order' => $pokemonData['order'],
                    'form' => $pokemonData['forms'][0]['url']
                ]
                );

         /*   
            foreach ($pokemonData['abilities'] as $abilitieData){

                if (!isset($abilities[$abilitieData['ability']['name']])){
                    $ability = Abilitie::Create(
                        ['name' => $abilitieData['ability']['name'],
                        'url' => $abilitieData['ability']['url']]
                    );
                    $abilities[$ability->name] = $ability;

                }else{
                    $ability = $abilities[$abilitieData['ability']['name']];
                
                }

                DB::table('pokemon_abilities')->insert([
                    'pokemon_id' => $pokemon->id,
                    'slot' => $abilitieData['slot'],
                    'is_hidden' => $abilitieData['is_hidden'],
                    'abilitie_id' => $ability->id
                ]);
            }
                   
           foreach ($pokemonData['moves'] as $moveData){
             if (!isset($moves[$moveData['move']['name']])){
                $move = Move::Create(
                    ['name' => $moveData['move']['name'],
                    'url' => $moveData['move']['url']]
                );
                $moves[$moveData['move']['name']] = $move;
             }else{
                $move = $moves[$moveData['move']['name']];
             }
                
                

                foreach($moveData['version_group_details'] as $details){
                    if (!isset($moveLearnMethods[$details['move_learn_method']['name']])){
                        $moveLearnMethod = MoveLearnMethod::Create(
                            ['name' => $details['move_learn_method']['name'],
                            'url' => $details['move_learn_method']['url']]
                        );
                        $moveLearnMethods[$details['move_learn_method']['name']] = $moveLearnMethod;
                    }else{
                        $moveLearnMethod = $moveLearnMethods[$details['move_learn_method']['name']];
                    }

                    if (!isset($versionGroups[$details['version_group']['name']])){
                        $versionGroup = VersionGroup::Create(
                            ['name' => $details['version_group']['name'],
                            'url' => $details['version_group']['url']]
                        );
                        $versionGroups[$details['version_group']['name']] = $versionGroup;
                    }else{
                        $versionGroup = $versionGroups[$details['version_group']['name']];
                    }

                    $versionGroupdetail = VersionGroupDetail::firstOrCreate([
                        'level_learned_at' => $details['level_learned_at'],
                        'move_learn_method_id' => $moveLearnMethod->id,
                        'version_group_id' => $versionGroup->id
                    ]);

                    DB::table('pokemon_moves')->insert([
                        'pokemon_id' => $pokemon->id,
                        'move_id' => $move->id,
                        'version_group_detail_id' => $versionGroupdetail->id
                    ]);
                }
  
            }

            foreach ($pokemonData['sprites'] as $key => $value) {
                if(gettype($value)=="array"){
                    continue;
                }
                $sprite = Sprite::create([
                    'pokemon_id' => $pokemon->id,
                    'key' => $key,
                    'url' => $value
                ]);
            }

            foreach ($pokemonData['types'] as $typeData){
                if(!isset($types[$typeData['type']['name']])){
                    $type = Type::Create(
                        ['name' => $typeData['type']['name'],
                        'url' => $typeData['type']['url']]
                    );
                    $types[$typeData['type']['name']] = $type;
                }else{
                    $type = $types[$typeData['type']['name']];
                }
                

                DB::table('pokemon_types')->insert([
                    'pokemon_id' => $pokemon->id,
                    'slot' => $typeData['slot'],
                    'type_id' => $type->id
                ]);
            }*/

            foreach ($pokemonData['stats'] as $statData){
                if(!isset($stats[$statData['stat']['name']])){
                    $stat = Stat::Create(
                        ['name' => $statData['stat']['name'],
                        'url' => $statData['stat']['url']]
                    );
                    $stats[$statData['stat']['name']] = $stat;
                }else{
                    $stat = $stats[$statData['stat']['name']];
                }
                

                DB::table('pokemon_stats')->insert([
                    'pokemon_id' => $pokemon->id,
                    'base_stat' => $statData['base_stat'],
                    'effort' => $statData['effort'],
                    'stat_id' => $stat->id
                ]);
            }
        }
    }
}
