<?php

namespace App\Http\Resources\V1;

use App\Models\Move;
use App\Models\VersionGroupDetail;
use Illuminate\Http\Resources\Json\JsonResource;

class PokemonMoveResource extends JsonResource
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
            'move' => new MoveResource(Move::find($this->move_id)),
            'version_group_details' => new VersionGroupDetailResource(VersionGroupDetail::find($this->version_group_detail_id)),
        ];
    }
}
