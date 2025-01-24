<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class tripulantes extends Model
{
    use HasFactory;

    protected $fillable = ['izena','abizena','rola','sartze_data','id_bidaia'];

    public function tripulazioa(){
        return $this->hasMany(bidaiak::class, 'id_bidaia');
    }
}
