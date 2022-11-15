<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Artisan;

class PokemonLocal extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'pokemon:local';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Fill the database with all 151 pokemon with localfile';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        Artisan::call('db:seed', [
            '--class' => 'PokemonSeeder',
        ]);
        return Command::SUCCESS;
    }
}
