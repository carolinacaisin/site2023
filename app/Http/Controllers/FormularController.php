<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Formular;
use App\Models\Produse;


class FormularController extends Controller
{
    public function index()
    {
      
        $produse = Produse::get();
        return view('formular',[
            'produse'=>$produse
        ]);
    }

}
