@extends('layouts.base')

@section('title', 'Update user')
@section('css', 'connected')

@section('content')
<div id="pgConnected">

    <x-menu_user />

    <div id="blockRight">


        <h2> Vous pouvez modifier vos informations ici </h2>

            <form action="/updateUser/{{ auth()->user()->id }}" method="POST">
            @csrf
            @method('PUT')
                <div class="name">
                    <label for="name" id="name"> Modifier votre nom: </label>
                    <input type="text" id="name" name="name" value="{{ auth()->user()->name }}">
                </div>
                <br>

                <div class="phone_number">
                    <label for="phone_number" id="phone_number"> Modifier votre numéro de téléphone :  </label>
                    <input type="text" id="phone_number" name="phone_number" value="{{ auth()->user()->phone_number }}">
                </div>
                <br>

                <div class="btn">
                    <button type="submit" class="btn btn-primary"> Enregistrer</button>
                </div>
            </form>

            <div class="delete">
                <p> Vous voulez supprimer votre compte?</p>
                    <div class="btn">
                        <form action="/deleteUser/{{ auth()->user()->id }}" method="POST">
                        @
                        @method('DELETE')
                            <button type="submit" class="btn btn-primary"> Supprimer compte</button>
                        </form>
                    </div>
            </div>

@endsection
