@extends('layouts.base')

@section('title', 'Add make')
@section('css', 'connected')

@section('content')
<div id="pgConnected">

    <x-menu_user />

    <div id="blockRight">


        <h2> Ajouter une marque </h2>

            <form action="/addMake" method="POST">
            @csrf
                <div class="name">
                    <label for="name" id="name"> Nom de la marque: </label>
                    <input type="text" id="name" name="name" value="{{ auth()->user()->name }}">
                </div>
                <br>

                <div class="btn">
                    <button type="submit" class="btn btn-primary"> Enregistrer</button>
                </div>
            </form>

@endsection
