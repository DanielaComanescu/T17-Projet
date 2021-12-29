@extends('layouts.base')
@section('title', 'Modifier votre voiture')
@section('css', 'add')
@section('content')
    <div id="pgAddCar">
        <x-menu_user />
        <div id="blockRight">
            <h2> Modifier les informations de la voiture</h2>
            <form action="/updateCar/{{$car->id}}" method="POST" class="formAdd">
                @csrf
                @method('PUT')
                <div class="columnOne">
                    <div>
                        <label for="">Marque</label>
                        <select name="" id="">
                            @foreach($makes as $make)
                                <option value={{$make->id}} @if ($car->make_id === $make->id) selected @endif>{{$make->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div>
                        <label for="">Modèle</label>
                        <input type="text" name="model" value="{{ $car->model }}">
                    </div>
                    <div>
                        <label for="">Prix</label>
                        <input type="text" name="price" value="{{ $car->price }}">
                    </div>
                    <div>
                        <label for="">Kilomètres</label>
                        <input type="text" name="kilometers" value="{{ $car->kilometers }}">
                    </div>
                    <div>
                        <label for="">Couleur</label>
                        <select name="color" id=""> 
                            <option @if ($car->color === "Noir") selected @endif>Noir</option>
                            <option @if ($car->color === "Gris") selected @endif>Gris</option>
                            <option @if ($car->color === "Blanc") selected @endif>Blanc</option>
                            <option @if ($car->color === "Bleu") selected @endif>Bleu</option>
                            <option @if ($car->color === "Rouge") selected @endif>Rouge</option>
                            <option @if ($car->color === "Vert") selected @endif>Vert</option>
                            <option @if ($car->color === "Jaune") selected @endif>Jaune</option>
                            <option @if ($car->color === "Violet") selected @endif>Violet</option>
                            <option @if ($car->color === "Orange") selected @endif>Orange</option>
                            <option @if ($car->color === "Beige") selected @endif>Beige</option>
                            <option @if ($car->color === "Marron") selected @endif>Marron</option>
                        </select>
                    </div>
                    <div>
                        <label for="">Plaque d'immatriculation</label>
                        <input type="text" name="number_plate" value="{{ $car->number_plate }}">
                    </div>
                    <div>
                        <label for="">Nombre de chevaux</label>
                        <input type="text" name="power" value="{{ $car->power }}">
                    </div>
                    <div>
                        <label for="">Image (Lien vers une image)</label>
                        <input type="text" name="car_image" value="{{ $car->car_image }}">
                    </div>
                    <div>
                        <label for="">Derniere révision</label>
                        <input type="text" name="last_check" value="{{ $car->last_check }}">
                    </div>
                    <div>
                        <label for="">Controle technique</label>
                        <input type="text" name="tc" value="{{ $car->tc }}">
                    </div>
                    <div class="select search_input">
                        <label for="registration_year">Année de première mise en circulation</label>
                        <select name="registration_year">
                            @for ($i = date("Y"); $i >= 2000; $i--)
                                <option value={{$i}} @if ($i === $car->registration_year) selected @endif>{{$i}}</option>
                            @endfor
                        </select>
                    </div>
                </div>
                <div class="columnTwo">
                    <div>
                        <label for="">Nombre de portes</label>
                        <select name="doors" id="">
                            <option value="3" @if ($car->doors === 3) selected @endif>2/3</option>
                            <option value="5" @if ($car->doors === 5) selected @endif>4/5</option>
                            <option value="7" @if ($car->doors === 7) selected @endif>6/7</option>
                        </select>
                    </div>
                    <div>
                        <label for="">Nombre de places</label>
                        <select name="seats" id="">
                            <option @if ($car->seats === 2) selected @endif>2</option>
                            <option @if ($car->seats === 3) selected @endif>3</option>
                            <option @if ($car->seats === 4) selected @endif>4</option>
                            <option @if ($car->seats === 5) selected @endif>5</option>
                            <option @if ($car->seats === 6) selected @endif>6</option>
                            <option @if ($car->seats === 7) selected @endif>7</option>
                        </select>
                    </div>
                    <div>
                        <label for="gearbox">Boite de vitesse</label>
                        <div>    
                            <input type="radio" class="check" name="gearbox" value="Manuelle" @if ($car->gearbox === "Manuelle") checked @endif>
                            <label for="gearbox1">Manuelle</label>
                        </div>
                        <div>   
                            <input type="radio" class="check" name="gearbox" value="Automatique" @if ($car->gearbox === "Automatique") checked @endif>
                            <label for="gearbox2">Automatique</label>
                        </div>
                    </div>
                    <div>
                        <label for="">Carburant </label>
                        <div>    
                            <input type="radio" class="check" name="fuel_type" id="" value="Electrique" @if ($car->fuel_type === "Electrique") checked @endif>
                            <label for="fuel_type1">Electrique</label>
                        </div>
                        <div>
                            <input type="radio" class="check" name="fuel_type" id="" value="Essence" @if ($car->fuel_type === "Essence") checked @endif>
                            <label for="fuel_type2">Essence</label>
                        </div>
                        <div>
                            <input type="radio" class="check" name="fuel_type" id="" value="Diesel" @if ($car->fuel_type === "Diesel") checked @endif>
                            <label for="fuel_type3">Diesel</label>
                        </div>
                        <div>
                            <input type="radio" class="check" name="fuel_type" id="" value="Hybride" @if ($car->fuel_type === "Hybride") checked @endif>
                            <label for="fuel_type4">Hybride</label>
                        </div>
                    </div>
                    <div>
                        <label for="">Options</label>
                        @foreach($options as $option)
                            <div>    
                                <input type="checkbox" class="check" name="options[]" id="" value={{$option->name}} @foreach ($car->options as $carOption) @if ($carOption->id === $option->id) checked @endif @endforeach>
                                <label for="options[]">{{$option->name}}</label>
                            </div>
                        @endforeach 
                    </div>
                    <div>
                        <button type="submit" class="btn btn-primary"> Enregistrer la voiture</button>
                    </div>
                </div> 
            </form>
        </div>
    </div>
@endsection