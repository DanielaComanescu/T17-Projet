@extends('layouts.base')

@section('title', 'Connected')
@section('css', 'connected')

@section('content')
<div id="pgConnected">

    <x-menu_user />

    <div id="BlockRight">
    @if (session('status'))
        <div>
            {{ session('status') }} {{auth()->user()->name}}
        </div>
    @endif

    </div>

    <div class="btn"><a href="/logout"> Deconnexion </a></div>

</div>

@endsection