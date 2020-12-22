<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kewarganegaraan extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama'
    ];

    protected $table = 'kewarganegaraans';

    public function penduduks(){
        return $this->hasMany('App/Models/Penduduk');
    }
}
