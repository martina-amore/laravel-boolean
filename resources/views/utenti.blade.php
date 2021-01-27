@extends('layout')

@section('content')
    <div>
        @foreach ($utenti as $utente)
            <h2>{{ $utente->first_name }} {{ $utente->last_name }}</h2>
            <img src="{{ $utente->image }}" alt="Immagine profilo">
            <p><strong>Email: </strong> {{ $utente->email }}</p>
            <p><strong>Sesso: </strong> {{ $utente->gender }}</p>
            <br>
        @endforeach
    </div>
@endsection
