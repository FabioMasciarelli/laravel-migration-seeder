@extends('layouts.app')

@section('content')
    <h1>Home page</h1>


    <table class="table">
        <thead>
            <tr>
                <th scope="col">Numero</th>
                <th scope="col">Azienda</th>
                <th scope="col">Stazione di Partenza</th>
                <th scope="col">Stazione di Arrivo</th>
                <th scope="col">Orario di Partenza</th>
                <th scope="col">Orario di Arrivo</th>
                <th scope="col">Codice Treno</th>
                <th scope="col">Numero di Carrozze</th>
            </tr>
        </thead>
        @foreach ($trains as $train)
            <tbody>
                <tr>
                    <th scope="row">{{ $train->id }}</th>
                    <td>{{ $train->azienda }}</td>
                    <td>{{ $train->stazione_di_partenza }}</td>
                    <td>{{ $train->stazione_di_arrivo }}</td>
                    <td>{{ $train->orario_di_partenza }}</td>
                    <td>{{ $train->orario_di_arrivo }}</td>
                    <td>{{ $train->codice_treno }}</td>
                    <td>{{ $train->numero_carrozze }}</td>
                </tr>
            </tbody>
        @endforeach
    </table>
@endsection
