<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LivreEmprunts extends Model
{
    use HasFactory;
    protected $fillable = [
        'date_emprunt',
        'dateRetour_emprunt',
        'nbreLive_emprunt',
        'id_abo',
        'id_livre',
        
    ];
    public function livres(){
        return $this->belongsTo(Livres::class, 'id_livre');// belongsTo= appartenir à
    }
    public function abonnes(){
        return $this->belongsTo(Abonnée::class, 'id_abo');// belongsTo= appartenir à
    }
}
