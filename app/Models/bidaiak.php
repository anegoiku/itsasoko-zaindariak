<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class bidaiak extends Model
{
    use HasFactory;

    protected $fillable = ['helmuga','hasiera','amaiera','id_tripulante', 'id_medikua'];

    public function tripulazioa(){
        return $this->hasMany(tripulantes::class, 'id_tripulante');
    }

    public function medikua(){
        return $this->hasMany(medikuak::class, 'id_medikua');
    }
}
