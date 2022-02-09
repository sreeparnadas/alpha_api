<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class AssemblyWithDistrictResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'parliamentaryConstituencyId' => $this->id,
            'name' => $this->parliamentary_constituency_name,
            'districts' => DistrictSpecialResource::collection($this->districts)
        ];
    }
}
