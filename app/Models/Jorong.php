<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jorong extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama','nagari_id'
    ];

    protected $table = 'jorongs';

    public function nagari(){
        return $this->belongsTo('App/Models/Nagari');
    }

    public function kartu_keluargas(){
        return $this->hasMany('App/Models/KartuKeluarga');
    }
}
