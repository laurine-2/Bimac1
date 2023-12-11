<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class UserResource extends JsonResource
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
            "first_name"=>$this->last_name,
            "last_name"=>$this->last_name,
            "email"=>$this->email,
            "b_mat"=>$this->b_mat,
            "type"=>$this->type,
        ];
    }
}
