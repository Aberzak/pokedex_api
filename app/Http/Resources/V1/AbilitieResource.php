<?php

namespace App\Http\Resources\V1;

use App\Models\Abilitie;
use Illuminate\Http\Resources\Json\JsonResource;

class AbilitieResource extends JsonResource
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
            'ability' => Abilitie::find($this->abilitie_id)->name,
            'is_hidden' =>$this->is_hidden,
            'slot' => $this->slot
        ];
    }
}
