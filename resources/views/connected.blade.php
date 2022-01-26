@extends('layouts.base')

@section('title', 'Connected')
@section('css', 'connected')

@section('content')
<div id="pgConnected">

    <x-menu_user />

    <div id="blockRight">

    @if (session('status'))
        <div>
            {{ session('status') }}
        </div>
    @endif

        <h2> Détails du compte </h2>

            <div class="infoUser">
                <div class="name">
                    <label for="name" id="name"> Votre nom est: {{ auth()->user()->name }} </label>
                </div>

                <div class="email">
                    <label for="email" id="email"> Votre adresse mail est: {{ auth()->user()->email }} </label>
                </div>

                <div class="phone_number">
                    <label for="phone_number" id="phone_number"> Votre numéro de téléphone est: {{ auth()->user()->phone_number }} </label>
                </div>
            </div>
            
            <div class="update">
                <p>Il y a eu un changement dans votre situation ou souhaitez vous supprimer votre compte?</p>
                <p> Vous pouvez modifier vos informations ici </p>
                <div class="btn">
                    <a href="/updateUser/{{ auth()->user()->id }}"> M o d i f i e r</a>
                </div>
            </div>
    </div>
</div>

@endsection
