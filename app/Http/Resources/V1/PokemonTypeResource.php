<?php

namespace App\Http\Resources\V1;

use App\Models\PokemonTypes;
use App\Models\Type;
use Illuminate\Http\Resources\Json\JsonResource;

class PokemonTypeResource extends JsonResource
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
            'slot' => $this->slot,
            'type' => new TypeResource(Type::find($this->type_id)) 
        ];
    }
}
