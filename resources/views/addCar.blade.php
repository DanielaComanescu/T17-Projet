@extends('layouts.base')

@section('title', 'Vendre une voiture')
@section('css', 'add')

@section('content')
    <div id="pgAddCar">

        <x-menu_user />

        <div id="blockRight">
            <h2> Veuillez renseigner les informations sur la voiture</h2>
        

        
            <form action="/addCar" method="POST" class="formAdd">
                @csrf
                <div class="columnOne">
                    <div>
                        <label for="">Marque</label>
                        <select name="make" id="">
                            @foreach($makes as $make)
                            <option value={{$make->id}}>{{$make->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div>
                        <label for="">Modèle</label>
                        <input type="text" name="model" placeholder="">
                    </div>
                    <div>
                        <label for="">Prix</label>
                        <input type="text" name="price" placeholder="">
                    </div>
                    <div>
                        <label for="">Kilomètres</label>
                        <input type="text" name="kilometers" placeholder="ex : 150 000">
                    </div>
                    <div>
                        <label for="">Couleur</label>
                        <select name="color" id="">
                            <option>Noir</option>
                            <option>Gris</option>
                            <option>Blanc</option>
                            <option>Bleu</option>
                            <option>Rouge</option>
                            <option>Vert</option>
                            <option>Jaune</option>
                            <option>Violet</option>
                            <option>Orange</option>
                            <option>Beige</option>
                            <option>Marron</option>
                        </select>
                    </div>
                    <div>
                        <label for="">Plaque d'immatriculation</label>
                        <input type="text" name="number_plate" placeholder="Au format XX-000-XX">
                    </div>

                    <div>
                        <label for="">Nombre de chevaux</label>
                        <input type="text" name="power" placeholder="CV">
                    </div>
                    <div>
                        <label for="">Image (Lien vers une image)</label>
                        <input type="text" name="car_image" placeholder="Lien vers une image">
                    </div>
                    <div>
                        <label for="">Derniere révision</label>
                        <input type="text" name="last_check" placeholder="MM/YYYY">
                    </div>
                    <div>
                        <label for="">Controle technique</label>
                        <input type="text" name="tc" placeholder="MM/YYYY">
                    </div>
                    <div class="select search_input">
                        <label for="registration_year">Année de première mise en circulation</label>
                        <select name="registration_year">
                            @for ($i = date("Y"); $i >= 2000; $i--)
                                <option value={{$i}}>{{$i}}</option>
                            @endfor
                        </select>
                    </div>
                </div>
                <div class="columnTwo">
                    <div>
                        <label for="">Nombre de portes</label>
                        <select name="doors" id="">
                            <option value="3">2/3</option>
                            <option value="5" selected>4/5</option>
                            <option value="7">6/7</option>
                        </select>
                    </div>
                    <div>
                        <label for="">Nombre de places</label>
                        <select name="seats" id="">
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option selected>5</option>
                            <option>6</option>
                            <option>7</option>
                        </select>
                    </div>
                    <div>
                        <label for="gearbox">Boite de vitesse</label>
                        <div>    
                            <input type="radio" class="check" name="gearbox" value="Manuelle">
                            <label for="gearbox1">Manuelle</label>
                        </div>
                        <div>   
                            <input type="radio" class="check" name="gearbox" value="Automatique">
                            <label for="gearbox2">Automatique</label>
                        </div>
                    </div>
                    <div>
                        <label for="">Carburant </label>
                        <div>    
                            <input type="radio" class="check" name="fuel_type" id="" value="Electrique" required>
                            <label for="fuel_type1">Electrique</label>
                        </div>
                        <div>
                            <input type="radio" class="check" name="fuel_type" id="" value="Essence">
                            <label for="fuel_type2">Essence</label>
                        </div>
                        <div>
                            <input type="radio" class="check" name="fuel_type" id="" value="Diesel">
                            <label for="fuel_type3">Diesel</label>
                        </div>
                        <div>
                            <input type="radio" class="check" name="fuel_type" id="" value="Hybride">
                            <label for="fuel_type4">Hybride</label>
                        </div>
                    </div>
                    <div>
                        <label for="">Options</label>
                        @foreach($options as $option)
                            <div>    
                                <input type="checkbox" class="check" name="options[]" id="" value={{$option->name}}>
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
