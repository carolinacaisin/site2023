<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produse;
use App\Models\Formular;

class MainController extends Controller
{
    public function index()
    {
        $produse = Produse::all();
        return view('produse.index', [
            'produse' => $produse
        ]);
    }
    // public function index2()
    // {
    //     $produse = Produse::all(); // Schimbă "Card" cu modelul tău pentru carduri
    //     $formular = new Formular(); // Schimbă "Formular" cu modelul tău pentru formular

    //     return view('app', compact('produse', 'formular'));
    // }
}
