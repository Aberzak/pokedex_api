<?php

namespace App\Http\Resources\V1;

use Illuminate\Http\Resources\Json\JsonResource;

class PokemonDetailResource extends JsonResource
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
            'sprites' => SpriteResource::collection($this->whenLoaded('sprites')),
            'types' => PokemonTypeResource::collection($this->whenLoaded('types')),
            'height' => $this->height,
            'weight' => $this->weight,
            //'moves' => PokemonMoveResource::collection($this->whenLoaded('moves')),
            'order' => $this->order,
            'species' => $this->species,
            'stats' => StatResource::collection($this->whenLoaded('stats')),
            'abilities' => AbilitieResource::collection($this->whenLoaded('abilities')),
            'form' => $this->form
        ];
    }
}
