<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class medikuak extends Model
{
    use HasFactory;

    protected $fillable = ['izena','abizena','sartze_data','id_bidaia'];

    public function bidaia(){
        return $this->hasMany(bidaiak::class, 'id_bidaia');
    }
}
