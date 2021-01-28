@extends('layout')

@section('titolo')
    Boolean - Profilo utente
@endsection

@section('content')
    <div>
        <h2>{{ $utente->first_name }} {{ $utente->last_name }}</h2>
        <img src="{{ $utente->image }}" alt="Immagine profilo">
        <p><strong>Email: </strong> {{ $utente->email }}</p>
        <p><strong>Sesso: </strong> {{ $utente->gender }}</p>
    </div>
@endsection
