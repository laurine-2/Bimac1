<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use SebastianBergmann\CodeCoverage\Report\Xml\Tests;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'b_mat',
        'type'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    //------------- isAdmin
    public function isAdmin()
    {
        return $this->type === 'admin';
        // Assurez-vous que 'admin' correspond à la valeur de type que vous utilisez pour identifier les administrateurs
    }

    //Cette relation permet de récupérer les tests de l'utilisateur
    public function tests(){
        return $this->hasMany(Tests::class);
    }

    // Define a method to check if a user has passed questions
    public function hasPassedQuestions()
    {
        // Implement your logic here
        // For example, if you have a relationship with answers, you can check if the user has correct answers
        return $this->answers()->where('is_correct', true)->exists();
    }

    // Relationship with answers
    public function answers()
    {
        return $this->hasMany(Answer::class);
    }

}
