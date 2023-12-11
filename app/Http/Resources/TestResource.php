<?php

namespace App\Http\Resources;

use App\Models\Subcategory;
use App\Models\User;
use Illuminate\Http\Resources\Json\JsonResource;

class TestResource extends JsonResource
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
            "created_at"=>$this->created_at,
            'user' => User::find($this->user->id)->first(),
            'subcategory' => Subcategory::find($this->subcategory->id)->first()
        ];
    }
}
