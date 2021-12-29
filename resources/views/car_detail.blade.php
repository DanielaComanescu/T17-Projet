@extends('layouts.base')

@section('title', 'Voiture ' . $car->id)
@section('css', 'findCarId')
@section('content')

    <div id="idForm">
        {{-- 1  IMAGE --}}

        <img style="cursor: zoom-in;" src="{{ $car->car_image }}" id="imgFindCar" title="{{ $car->make->name }}">

        <div id="secondB">{{-- 2  (BANDE 1) --}}

            <div id="divM"> {{-- Gauche --}}
                <p id="divMK">{{ $car->make->name }}, {{ $car->model }} </p>

                <p></p>
            </div>

            {{-- Droite --}}
            <div id="divS">
                <p>{{ $car->price }}</p>
                


                @if($car->user_id == auth()->id())
                    <button> <a href="/updateCar/{{$car->id}}" class="buttonA">Modifier la voiture</a> </button>
                
                @else
                    <button> <a href="https://www.google.com/search?q=felicitation&tbm=isch&ved=2ahUKEwjZ8P7_7Yj0AhV-AGMBHWb-A28Q2-cCegQIABAA&oq=felicitation&gs_lcp=CgNpbWcQAzIFCAAQgAQyBQgAEIAEMgUIABCABDIFCAAQgAQyBQgAEIAEMgUIABCABDIFCAAQgAQyBQgAEIAEMgUIABCABDIFCAAQgAQ6BwgjEO8DECdQmQNYmQNgqQRoAHAAeACAAWGIAb8BkgEBMpgBAKABAaoBC2d3cy13aXotaW1nwAEB&sclient=img&ei=aySJYZmPOP6AjLsP5vyP-AY&bih=937&biw=1920&rlz=1C1MSIM_enFR668FR668#imgrc=moXdW93Z25hAnM" class="buttonA">Achetez maintenant</a> </button>
                @endif
                

            </div>
        </div>

        {{-- 3 --}}
        <div class="infoNav">

            <div class="blocN">
                <div class="mainN">Kilometres </div>
                <div>{{ $car->kilometers }}</div>
            </div>

            <div class="blocN">
                <div class="mainN">Première Mise en circulation</div>
                <div> {{ $car->registration_year }}</div>
            </div>

            <div class="blocN">
                <div class="mainN">Carburant</div>
                <div>{{ $car->fuel_type }}</div>
            </div>

            <div class="blocN">
                <div class="mainN">Puissance</div>
                <div>{{ $car->power }}</div>
            </div>

            <div class="blocN">
                <div class="mainN">Nombre de portes</div>
                <div>{{ $car->doors }}</div>
            </div>

            <div class="blocN">
                <div class="mainN">Nombre de sieges</div>
                <div style="">{{ $car->seats }}</div>
            </div>
        </div>

        <div>
            <div>Options</div>
            @foreach($car->options as $option)
                <div>{{$option->name}}</div>
            @endforeach
        </div>

        <div>
            <div></div>
            <div></div>
        </div>
    </div>

@endsection
