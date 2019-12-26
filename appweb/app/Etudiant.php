<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Etudiant extends Model
{
    //

    protected $fillable = [
        'nom', 'email', 'phone', 'adresse', 'cv', 'lm'
    ];

    public function demandes() {
        return $this->belongsToMany(Offre::class);
    }

    
}
