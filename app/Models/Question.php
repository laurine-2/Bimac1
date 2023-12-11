<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    use HasFactory;

    protected $fillable = [
        'subcategory_id',
        'description',
        'reponse_1',
        'reponse_2',
        'reponse_3',
        'reponse_4'
    ];

    //Cette relation permet de récupérer la sous catégorie de la question
    public function subcategory(){
        return $this->belongsTo(Subcategory::class);
    }

    //Cette relation permet de récupérer les réponses de la question
    public function answers(){
        return $this->hasMany(Answer::class);
    }
}
