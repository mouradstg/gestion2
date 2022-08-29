<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gestion extends Model
{
    use HasFactory;


    protected $fillable = [
        'nom',
        'tel',
        'source',
        'adress',
        'produit',
        'prix',
        'charge',
        'benefice',
        'delivery',
    ];



}
