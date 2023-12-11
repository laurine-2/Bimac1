<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
    use HasFactory;

    protected $fillable = [
        'question_id',
        'test_id',
        'reponse_1',
        'reponse_2',
        'reponse_3',
        'reponse_4'
    ];

    //Cette relation permet de récupérer le test
    public function test(){
        return $this->belongsTo(Test::class);
    }

    //Cette relation permet de récupérer la question ayant cette réponse
    public function question(){
        return $this->belongsTo(Question::class);
    }

    public function user()
{
    return $this->belongsTo(User::class);
}

}
