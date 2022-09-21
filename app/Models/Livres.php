<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Livres extends Model
{
    use HasFactory;
   
    protected $fillable = [
        'auteur',
        'edition',
        'disponibilite',
        'id_four',
        
    ];
    public function fournisseurs(){
        return $this->belongsTo(Fournisseurs::class, 'id_four');// belongsTo= appartenir à
    }
}
