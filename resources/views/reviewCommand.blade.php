@extends('layouts.base')

@section('title', 'Mes voitures')
@section('css', 'connected')

@section('content')
    <div id="pgConnected">
        
        <x-menu_user />



        <div id="blockRight">


            <table id="tabMyCar">
                <tr>
                    <th>Marque</th>
                    <th>Modele</th>
                    <th>Prix</th>
                    <th>Status</th>
                </tr>
                @foreach ($commands as $command)
                    <tr class="tdMyCar">
                        <td>{{ $command->car->make->name }}</td>
                        <td>{{ $command->car->model }}</td>
                        <td>{{ $command->car->price }}</td>
                        <td>{{ $command->status }}</td>
                    </tr>
                @endforeach
            </table>
        </div>

    </div>

@endsection
