<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Formular extends Model
{
    use HasFactory;
    protected $fillable = [
        'nume',
        'prenume',
        'telefon',
        'mesaj'
        
    ];
}
