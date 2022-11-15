<?php

namespace App\Http\Resources\V2;

use App\Http\Resources\V1\PokemonTypeResource;
use App\Http\Resources\V1\SpriteResource;
use Illuminate\Http\Resources\Json\JsonResource;

class PokemonResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'id'=> $this->id,
            'name'=> $this->name,
            'sprites' => SpriteResource::collection($this->whenLoaded('sprites'))->where('key','front_default'),
            'types' => PokemonTypeResource::collection($this->whenLoaded('pokemonTypes'))
        ];
    }
}
