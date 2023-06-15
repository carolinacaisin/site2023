<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produse extends Model
{
    use HasFactory;
    protected $fillable = [
        'img', 'titlu', 'descriere','pret'
    ];
}
