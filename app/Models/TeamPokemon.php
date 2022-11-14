<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TeamPokemon extends Model
{
    use HasFactory;

    protected $fillable = [
        'team_id',
        'pokemon_id'
    ];


    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'team_pokemons';

    
}
