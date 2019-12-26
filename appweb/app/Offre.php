<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Offre extends Model
{
    //
    protected $fillable = [
        'subject', 'description', 'periode'
    ];

    public function region() {
        return $this->belongsTo(Regions::class);
    }

    public function technos() {
        return $this->belongsToMany(Techno::class);
    }

    public function etudiants() {
        return $this->belongsToMany(Etudiant::class);
    }

    public function entreprise() {
        return $this->hasOne(Entreprise::class);
    }
}
