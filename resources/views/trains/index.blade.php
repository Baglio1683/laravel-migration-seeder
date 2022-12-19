@extends('layouts.app')

@section('title', 'All train')

@section('content')
    <div class="container">
        <h2>La lista dei treni</h2>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Azienda</th>
                    <th scope="col">Stazione di partenza</th>
                    <th scope="col">Stazione di arrivo</th>
                    <th scope="col">Orario di partenza</th>
                    <th scope="col">Orario di arrivo</th>
                    <th scope="col">Codice Treno</th>
                    <th scope="col">Numero Carrozze</th>
                    <th scope="col">In orario</th>
                    <th scope="col">Cancellato</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($trains as $train)
                    <tr>
                        <th scope="row">{{ $train->Azienda }}</th>
                        <td>{{ $train->Stazione_di_partenza }}</td>
                        <td>{{ $train->Stazione_di_arrivo }}</td>
                        <td>{{ $train->Orario_di_partenza }}</td>
                        <td>{{ $train->Orario_di_arrivo }}</td>
                        <td>{{ $train->Codice_Treno }}</td>
                        <td>{{ $train->Numero_Carrozze }}</td>

                        @if ($train->In_orario)
                            <td> Si </td>
                        @else
                            <td> No</td>
                        @endif

                        @if ($train->Cancellato)
                            <td> Si </td>
                        @else
                            <td> No </td>
                        @endif

                    </tr>
                @endforeach
            </tbody>
        </table>

    </div>
@endsection








{{-- 

<ul>
    @foreach ($trains as $train)
        <li>{{ $train->Azienda }}, {{ $train->Codice_Treno }}</li>
    @endforeach
</ul> --}}
