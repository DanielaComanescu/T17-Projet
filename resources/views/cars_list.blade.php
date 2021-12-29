@extends('layouts.base') 

@section('title', 'Chercher')
@section('css', 'find')

@section('content')
    

<div id="findC">
        <div id="leftBloc">
            <div>
                <div id="divLeftBloc">
                    <div id="divLeftBlocF">
                        <p class="filter">
                            Filtres
                        </p>
                    </div>
                    <div>
                        <x-filters :options="$options" :makes="$makes"/>
                    </div>
                </div>
            </div>
        </div>

        <div id="rightBloc">
            <div class="list">
                <div class="blocCar">
                    @foreach ($cars as $car)
                        <div style="overflow:hidden" class="blocCar3">
                            <img src="{{ $car->car_image }}" width="450" title="{{ $car->model }}">
                            {{-- <img src="{{ asset('findCar'.$car->car_image) }}" alt=""> --}}
                            <div>{{ $car->make->name }}</div>
                            <div>{{ $car->model }}</div>
                            <div>{{ $car->price }}</div>
                            <div>
                                @if ($car->kilometers > 0)
                                    {{ $car->kilometers }}
                                @else
                                    La voiture ne comptabilise aucun
                                @endif
                                km
                            </div>
                            <a href="/finCar/{{$car->id}}">Regarder la voiture</a>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection
