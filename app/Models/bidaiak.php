<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class bidaiak extends Model
{
    use HasFactory;

    protected $fillable = ['helmuga','hasiera','amaiera','id_tripulante'];

    public function tripulazioa(){
        return $this->hasMany(tripulantes::class, 'id_tripulante');
    }
}
