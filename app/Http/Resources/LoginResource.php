<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

/**
 * @property mixed id
 * @property mixed user_name
 * @property mixed user_type_id
 * @property mixed token
 * @property mixed user_type
 */
class LoginResource extends JsonResource
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
            'uniqueId' => $this->id,
            'person' => new PersonResource($this->person),
            // 'person' => new PersonResource($this->person->first()),
            // 'userName' => $this->user_name,
            // 'userTypeId' => $this->user_type_id,
            // 'userTypeName' => $this->user_type->user_type_name,
            'token' => $this->token,
        ];
    }
}
