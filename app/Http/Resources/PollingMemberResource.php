<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

/**
 * @property mixed polling_number
 * @property mixed id
 * @property mixed person_id
 * @property mixed parent_id
 * @property mixed person_name
 * @property mixed parent_name
 * @property mixed remark
 * @property mixed email
 * @property mixed person_type_name
 * @property mixed age
 * @property mixed gender
 * @property mixed mobile1
 * @property mixed mobile2
 * @property mixed voter_id
 * @property mixed assembly_name
 */
class PollingMemberResource extends JsonResource
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
            "id" => $this->id,
			"personId" => $this->person_id,
			"parentId" => $this->parent_id,
			"personName" => $this->person_name,
			"parentName" => $this->parent_name,
			"remark" => $this->remark,
			"email" => $this->email,
			"personTypeName" => $this->person_type_name,
			"age" => $this->age,
			"gender" => $this->gender,
			"mobile1" => $this->mobile1,
			"mobile2" => $this->mobile2,
			"voterId" => $this->voter_id,
			"assemblyName" => $this->assembly_name,
			"pollingNumber" => $this->polling_number
        ];
    }
}
