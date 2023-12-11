<?php

namespace App\Http\Resources;

use App\Models\Subcategory;
use App\Models\User;
use Illuminate\Http\Resources\Json\JsonResource;

class QuestionResource extends JsonResource
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
            "description"=>$this->description,
            "reponse_1"=>$this->reponse_1,
            "reponse_2"=>$this->reponse_2,
            "reponse_3"=>$this->reponse_3,
            "reponse_4"=>$this->reponse_4,
            "subcategory"=>Subcategory::find($this->subcategory_id),
            "user"=>User::find($this->user_id)
        ];
    }
}
