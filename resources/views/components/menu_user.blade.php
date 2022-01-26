<div id="blockLeft">
    <div class="buttons">
        <div class="btn"><a href="/connectedRoute"> Mes infos personnelles </a></div>
        <div class="btn"><a href="/myCommands"> Mes commandes </a></div>
        <div class="btn"><a href="/myCars"> Mes voitures sur le site </a></div>
        <div class="btn"><a href="/addCar"> Nouvelle vente </a></div>
        @if (auth()->user()->isAdmin())
            <div class="btn"><a href="/reviewCars"> Voitures en attentes </a></div>
            <div class="btn"><a href="/reviewCommands"> Toutes les commandes </a></div>
        @endif
    </div>
</div>