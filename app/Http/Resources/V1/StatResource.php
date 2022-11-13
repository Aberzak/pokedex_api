<?php

namespace App\Http\Resources\V1;

use App\Models\Stat;
use Illuminate\Http\Resources\Json\JsonResource;

class StatResource extends JsonResource
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
            'stat' => Stat::find($this->stat_id)->name,
            'base_stat' => $this->base_stat,
            'effort' => $this->effort
        ];
    }
}
