<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Medecin extends Model
{
    use HasFactory;

    protected $fillable = [
        'dr_nom',
        'dr_prenom',
        'dr_genre',
        'dr_dateNaissance',
        'dr_telephone',
        'dr_login',
        'dr_password',
        'jourService',
        'heureDebut',
        'heureDecente',
        'profil_image',
        'disponibilite',
        'service_id',
    ];

    public function service()
    {
        return $this->belongsTo(Service::class);
    }
}
