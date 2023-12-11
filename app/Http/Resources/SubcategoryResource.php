<?php

namespace App\Http\Resources;

use App\Models\Question;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Facades\DB;
use League\CommonMark\Extension\Table\Table;

class SubcategoryResource extends JsonResource
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
            "title"=>$this->title,
            "description"=>$this->description
        ];
    }
}
