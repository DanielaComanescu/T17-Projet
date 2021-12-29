@extends('layouts.base')

@section('title', 'Inscription')
@section('css', 'inscription')

@section('content')
<div class="pgInscription">
    @if ($errors->any())
            <br>
            @foreach ($errors->all() as $error)
                <li style="color:red">{{ $error }}</li>
            @endforeach
    @endif

    <h2> S'INSCRIRE </h2>

        <form action="/inscription" method="POST"> 
        @csrf
            <div id="name">
                <label for="name"> Votre nom et prénom </label>
                    <input type="text" id="name" name="name" value="{{old('name')}}">
            </div>
            <br>

            <div id="email">
                <label for="email"> Adresse mail </label>
                    <input type="text" id="email" name="email" value="{{old('email')}}">
            </div>
            <br>

            <div id="password">
                <label for="password"> Mot de passe </label>
                    <input type="password" id="password" name="password">
            </div>
            <br>
            <div id="confirmPassword">
                <label for="confirmPassword"> Confirmez le mot de passe </label>
                    <input type="password" id="confirmPassword" name="password_confirmation" required>
            </div>
            <br>

            <div id="phone_number">
                <label for="phone_number"> Votre numéro téléphone </label>
                    <input type="text" id="phone_number" name="phone_number" value="{{old('phone_number')}}">
            </div>
            <br>

            <div id="button">
                <button type="submit" class="btn btn-primary">Je m'inscris</button>
            </div>
        </form>
</div>
@endsection