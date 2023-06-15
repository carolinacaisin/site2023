<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\MainController;
use App\Http\Controllers\ProduseController;

use App\Http\Controllers\FormularController;
use App\Models\Formular;

Route::get('/', [MainController::class, 'index'])->name('produse');

Route::resource('admin', ProduseController::class);


Route::get('/formular', [FormularController::class, 'index']);
Route::post('/formular', function(){
   Formular::create([
       'nume'=>request('nume'),
       'prenume'=>request('prenume'),
       'telefon'=>request('telefon'),
       'mesaj'=>request('mesaj'),
   ]);
   return redirect('/formular');
});

Route::get('/about', function () {
    return view('about');
})->name('about');
   

