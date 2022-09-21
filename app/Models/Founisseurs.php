<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Founisseurs extends Model
{
    use HasFactory;
    protected $fillable = [
        'nom_four',
        'prenom_four',
        'adresse_four',
        'telephone_four',
        
    ];
}
