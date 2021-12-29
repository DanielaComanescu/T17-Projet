@extends('layouts.base')

@section('title', 'Add make')
@section('css', 'connected')

@section('content')
<div id="pgConnected">

    <x-menu_user />

    <div id="blockRight">


        <h2> Ajouter une marque </h2>

            <form action="/updateMake/{{ $make->id }}" method="POST">
            @csrf
                <div class="name">
                    <label for="name" id="name"> Modifier le nom de la marque: </label>
                    <input type="text" id="name" name="name" value={{ $make->name }}>
                </div>
                <br>

                <div class="btn">
                    <button type="submit" class="btn btn-primary"> Enregistrer</button>
                </div>
            </form>

@endsection
