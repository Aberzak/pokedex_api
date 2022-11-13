<?php

namespace App\Http\Resources\V1;

use App\Models\MoveLearnMethod;
use App\Models\VersionGroup;
use Illuminate\Http\Resources\Json\JsonResource;

class VersionGroupDetailResource extends JsonResource
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
            'move_learn_method' => MoveLearnMethod::find($this->move_learn_method_id)->name,
            'version_group' => VersionGroup::find($this->version_group_id)->name,
            'level_learned_at' => $this->level_learned_at,
        ];
    }
}
