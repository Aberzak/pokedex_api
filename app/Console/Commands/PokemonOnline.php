<?php

namespace App\Console\Commands;

use App\Models\Pokemon;
use Illuminate\Console\Command;
use PokePHP\PokeApi;

class PokemonOnline extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'pokemon:online {pokemon}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = ' Import a Pokémon from an external service, given an external ID or name as parameter';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $api = new PokeApi;
        $pokemonJson= $api->pokemon($this->argument('pokemon'));
        $pokemonsArray = json_decode($pokemonJson,true);
        
        dd($pokemonsArray);

        return Command::SUCCESS;
    }
}
