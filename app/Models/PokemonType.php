<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PokemonType extends Model
{
    use HasFactory;
    
    protected $guarded = ['id'];

    public function pokemon()
    {
        return $this->belongsTo(Pokemon::class);
    }

    public function type()
    {
        return $this->belongsTo(Type::class);
    }
}
