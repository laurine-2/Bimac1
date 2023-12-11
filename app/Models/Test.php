<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Test extends Model
{
    use HasFactory;

    //Cette relation permet de récupérer l'utilisateur de ce test
    public function user(){
        return $this->belongsTo(User::class);
    }

    //Cette relation permet de récupérer les réponses de ce test
    public function answers(){
        return $this->hasMany(Answer::class);
    }

    //Cette relation permet de récupérer la sous categorie de ce test
    public function subcategory(){
        return $this->belongsTo(Subcategory::class);
    }
}
