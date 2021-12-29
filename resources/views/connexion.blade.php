@extends('layouts.base')

@section('title', 'Me connecter')
@section('css', 'connexion')

@section('content')
<div id="pgConnexion">

    <div id="rightBlock">
        <div class="connexionForm">
            <br>
            <br>
            <h2> SE CONNECTER </h2>

            @if ($errors->any())
            <br>
                @foreach ($errors->all() as $error)
                    <li style="color:red">{{ $error }}</li>
                @endforeach
            @endif
                
            <form action="/connexion" method="POST"> 
            @csrf
                <div class="email">
                    <label for="email"> Adresse mail </label>
                        <input type="text" id="email" name="email" value="alexandre@gmail.com">
                </div>
                <br>
                    
                <div class="password">
                    <label for="password"> Mot de passe </label>
                        <input type="password" id="password" name="password" value="123456789">
                </div>
                <br>
                
                <div class="button">
                    <button type="submit" class="btn btn-primary">Je me connecte</button>
                </div>
                <br>
                <br>
                <div class="inscription">
                    <a href="/inscription"> Créer un compte </a>
                </div>      
            </form>
        </div>
    </div>

</div>
@endsection