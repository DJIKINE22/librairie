<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Abonnée extends Model
{
    use HasFactory;
    protected $fillable = [
        'nom_abo',
        'prenom_abo',
        'adresse_abo',
        'telephone_abo',
        
    ];
}
