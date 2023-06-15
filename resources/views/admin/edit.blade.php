@extends('layouts.home')

@section('title', 'Editeaza produs')

@section('content')
    <div class="container">
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
        <form action="{{ route('admin.update',['admin'=>$admin->id]) }}"
              method="post"
              enctype="multipart/form-data">
            @csrf
            @method('put')
            <label for="img">Imagine</label>
            <input type="file" name="img" id="img">
            <label for="titlu">Titlu</label>
            <input type="text" name="titlu" id="titlu" value="{{ $admin->titlu}}">
            <label for="descriere">Descriere</label>
            <input type="text" name="descriere" id="descriere" value="{{ $admin->descriere}}">
            <label for="descriere">Pret</label>
            <input type="text" name="pret" id="pret" value="{{ $admin->pret}}">

            <button type="submit">Edit</button>
        </form>
    </div>
@endsection
@push('styles')
<style>
  form{
            width: 600px;
            margin: 30px auto;
            display: flex;
            flex-direction:column;
            gap:10px;
        }
        form > * {
            padding: 5px 30px;
        }
        form label{
            font-weight:bold;
        }
</style>
@endpush
