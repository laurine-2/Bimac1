<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subcategory extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description'
    ];


    //Cette relation permet de récupérer les question de la sous categorie
    public function questions(){
        return $this->hasMany(Answer::class);
    }

    //Cette relation permet de récupérer les tests de la sous categorie
    public function tests(){
        return $this->hasMany(Tests::class);
    }
}
