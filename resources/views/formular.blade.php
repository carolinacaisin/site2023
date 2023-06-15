@extends('layouts.app')

@section('title', 'Produse')

@section('content')
@forelse ($produse as $produs)
<div class="box-container">
    <div class="box">
        <a href="#" class="fa fa-heart"></a>
        <a href="#" class="fa fa-eye"></a>
        <img src="{{asset('imagine/'.$produs->img)}}" alt="{{ $produs->nume }}" class="img-produs">
        <h2 class="h2-costumed">{{ $produs->titlu}}</h2>
        <p> {{ $produs->descriere}}</p>
        <div class="stars">
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
        </div>
        <h3>{{ $produs->pret}}</h3>
        <a href="#" class="btn2">add to card</a>
    </div>
</div>
@empty
<p>Nu sunt produse in baza de date</p>
@endforelse

@endsection

@section('form')

<div class="row">
    <div class="image">
        <img src="imagine/contact-img.jpg" alt="">
    </div>
    
    <form method="POST" action="">
        @csrf
        <h3>Inregistreaza comanda</h3>
        <input type="text" name="nume" required class="box" maxlength="20" placeholder="Scrie numele">

        <input type="text" name="prenume" required class="box" maxlength="20" placeholder="Scrie prenumele">

        <input type="number" name="telefon" required class="box" maxlength="20" placeholder="Scrie numarul de telefon" min="0" max="9999999999" onkeypress="if(this.value.length == 10) return false">

        <input type="text" name="mesaj" required class="box" maxlength="500" placeholder="Scrie mesajul">

        <input type="submit" name="trimite" value="Trimite" class="btn2">

        

    </form>
</div>

@endsection


