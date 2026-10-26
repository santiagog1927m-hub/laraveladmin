<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Computer extends Model
{
    use HasFactory;

    
    protected $fillable = [
        'number',
        'brand' ,
        'urlFoto',
        'imagen_url',
        'imagen_public_id'
       ];

    // Un computador tiene muchos aprendices
    public function aprendice()
    {
        return $this->hasOne(Aprendice::class);
    }
}