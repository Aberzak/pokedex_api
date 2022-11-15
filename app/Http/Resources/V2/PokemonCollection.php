<?php

namespace App\Http\Resources\V2;

use Illuminate\Http\Resources\Json\ResourceCollection;

class PokemonCollection extends ResourceCollection
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'data' => $this->collection,
            'metadata' => [
                "next" =>  $this->nextPageUrl(),
                "previous" =>  $this->previousPageUrl(),
                "total" =>  $this->total(),
                "pages" => $this->lastPage(),
                "page" => $this->currentPage(),
            ]
        ];
    }
}
