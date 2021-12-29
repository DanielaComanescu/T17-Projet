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
                    <th>Mettre à jour</th>
                    <th>Supprimer</th>

                </tr>
                @foreach (auth()->user()->cars as $car)
                    <tr class="tdMyCar">
                        <td>{{ $car->make->name }}</td>
                        <td>{{ $car->model }}</td>
                        <td>{{ $car->price }}</td>
                        <td>{{ $car->status }}</td>
                        <td>
                            <a href="/updateCar/{{ $car->id }}" class="btn btn-primary">♻️</a>
                        </td>
                        <td>
                            <form action="/deleteCar/{{ $car->id }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <input type="hidden" name="id" value="{{ $car->id }}">
                                <input class="btn btn-danger" type="submit" value="🗑️">
                            </form>
                        </td>
                    </tr>
                @endforeach
            </table>
        </div>

    </div>

@endsection
