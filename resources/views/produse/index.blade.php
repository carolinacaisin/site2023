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


@push('styles')
<style>

</style>
@endpush