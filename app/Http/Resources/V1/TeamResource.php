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
        
        if(isset($pokemons) && !($pokemons->isMissing())){
            $pokemonsMessage = $pokemons->pluck('pokemon_id');
        }else{
            $pokemonsMessage = 'This team is empty';
        }

        return [
            'id' => $this->id,
            'name' => $this->name,
            'pokemons' => $pokemonsMessage,
        ];
    }
}
