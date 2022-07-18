<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Proche extends Model
{
    use HasFactory;


    protected $fillable = [
        'nomProche',
        'prenomProche',
        'genre',
        'dateNaissance',
        'patient_id'
    ];

    public function patient()
    {
        return $this->belongsTo(Patient::class);
    }
}
