@extends('layouts.app')

@section('title', 'All houses')

@section('content')
    <div class="container">
        <h2>La lista dei treni</h2>
        <ul>
            @foreach ($trains as $train)
                <li>{{ $train->Azienda }}, {{ $train->Codice_Treno }}</li>
            @endforeach
        </ul>
    </div>
@endsection
