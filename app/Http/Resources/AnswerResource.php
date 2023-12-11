<?php

namespace App\Http\Resources;

use App\Models\Question;
use App\Models\User;
use Illuminate\Http\Resources\Json\JsonResource;

class AnswerResource extends JsonResource
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
            "reponse_1"=>$this->reponse_1,
            "reponse_2"=>$this->reponse_2,
            "reponse_3"=>$this->reponse_3,
            "reponse_4"=>$this->reponse_4,
            "question"=>new QuestionResource(Question::find($this->$this->question_id)->first()),
            "user"=>User::find($this->user_id)->first()
        ];
    }
}
