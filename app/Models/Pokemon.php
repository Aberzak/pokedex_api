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

    public function spriteDefault()
    {
        return $this->hasMany(Sprite::class)->where('key','front_default');
    }

    public function types()
    {
        return $this->hasMany(PokemonTypes::class);
    }
}
