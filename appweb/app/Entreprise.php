<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Entreprise extends Model
{
    //

    protected $fillable = [
        'nom', 'description', 'adresse'
    ];

    public function offres() {
        return $this->hasMany(Offre::class);
    }
}
