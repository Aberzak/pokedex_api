<?php

namespace App\Http\Resources\V1;

use Illuminate\Http\Resources\Json\JsonResource;

class TeamResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        $pokemons = $this->whenLoaded('pokemons');

        return [
            'id' => $this->id,
            'name' => $this->name,
            'pokemons' => $pokemons->isNotEmpty() ? $pokemons->pluck('pokemon_id') : 'This team is empty'
        ];
    }
}
