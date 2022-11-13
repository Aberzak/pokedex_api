<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pokemon extends Model
{
    use HasFactory;

    public function data()
    {
        $this->sprites();
    }

    public function sprites()
    {
        return $this->hasMany(Sprite::class);
    }

    public function types()
    {
        return $this->hasMany(PokemonType::class);
    }

    public function moves()
    {
        return $this->hasMany(PokemonMove::class);
    }

    public function stats()
    {
        return $this->hasMany(PokemonStat::class);
    }

    public function abilities()
    {
        return $this->hasMany(PokemonAbilitie::class);
    }
}
