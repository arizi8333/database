<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nagari extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama'
    ];
    protected $table = 'nagaris';

    public function jorongs(){
        return $this->hasMany('App/Models/Jorong');
    }
}
