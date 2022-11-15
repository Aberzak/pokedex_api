<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pokemon extends Model
{
    use HasFactory;

    public function sprites()
    {
        return $this->hasMany(Sprite::class);
    }

    public function pokemonTypes()
    {
        return $this->hasMany(PokemonType::class);
    }

    public function pokemonMoves()
    {
        return $this->hasMany(PokemonMove::class);
    }

    public function pokemonStats()
    {
        return $this->hasMany(PokemonStat::class);
    }

    public function pokemonAbilities()
    {
        return $this->hasMany(PokemonAbilitie::class);
    }
}
