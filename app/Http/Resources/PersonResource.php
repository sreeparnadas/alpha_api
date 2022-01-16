<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class PersonResource extends JsonResource
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
            'personId..' => $this->id,
            "personName" => $this->person_name,
            "email" => $this->email,
            "mobile1" => $this->mobile1,
            "mobile2" => $this->mobile2,
            "aadharId" => $this->aadhar_id,
            "voterId" => $this->voter_id,
        ];
    }
}
