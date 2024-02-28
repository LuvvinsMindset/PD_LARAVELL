<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Kurss extends Model
{
    protected $fillable = [
        'nosaukums',
        'apraksts',
        'banera_adrese',
        'cilveku_skaits',
    ];
}