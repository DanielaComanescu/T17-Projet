<div class="filters">
    <form action="/search" method="post">
        @csrf
        <!-- Status admin only -->
        @if (auth()->check() && auth()->user()->isAdmin())
            <div class="accordion">Status</div>
            <div class="panel">
                    <div class="status">
                        <input type="checkbox" class="check" name="status[]" value="En vente" checked>
                        <label for="status1">En vente</label>
                    </div>
                    <div class="status">
                        <input type="checkbox" class="check" name="status[]" value="Vendu">
                        <label for="status2">Vendu</label>
                    </div>
                    <div class="status">
                        <input type="checkbox" class="check" name="status[]" value="Retiré">
                        <label for="status3">Retiré</label>
                    </div>
                    <div class="status">
                        <input type="checkbox" class="check" name="status[]" value="En cours de validation">
                        <label for="status4">En cours de validation</label>
                    </div>
            </div>
        @endif
        <div class="accordion">Marque</div>
        <div class="panel">
                @foreach($makes as $make)
                    <div>    
                        <input type="checkbox" class="check" name="makes[]" id="" value={{$make->id}}>
                        <label for="makes[]">{{$make->name}}</label>
                    </div>
                @endforeach 
        </div>
        <div class="accordion">Prix</div>
        <div class="panel">
            <div class="select search_input">
                <label for="max_price">Prix Min</label>
                <select name="min_price" id="">
                    <option value="">Tout</option>
                    <option value="5000">5 000 €</option>
                    <option value="7500">7 500 €</option>
                    <option value="10000">10 000 €</option>
                    <option value="15000">15 000 €</option>
                    <option value="20000">20 000 €</option>
                    <option value="30000">30 000 €</option>
                    <option value="50000">50 000 €</option>
                </select>
            </div>
            <div class="select search_input">
                <label for="max_price">Prix Max</label>
                <select name="max_price" id="">
                    <option value="">Tout</option>
                    <option value="5000">5 000 €</option>
                    <option value="7500">7 500 €</option>
                    <option value="10000">10 000 €</option>
                    <option value="15000">15 000 €</option>
                    <option value="20000">20 000 €</option>
                    <option value="30000">30 000 €</option>
                    <option value="50000">50 000 €</option>
                </select>
            </div>
        </div>
        <div class="accordion">Sièges</div>
        <div class="panel">
            <div class="select search_input">
                <label for="max_seats">Sièges Min</label>
                <select name="min_seats" id="">
                    <option value="">Tout</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                    <option>6</option>
                    <option>7</option>
                </select>
            </div>
            <div class="select search_input">
                <label for="max_seats">Sièges Max</label>
                <select name="max_seats" id="">
                    <option value="">Tout</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                    <option>6</option>
                    <option>7</option>
                </select>
            </div>
        </div>
        <div class="accordion">Portes</div>
        <div class="panel">
            <div class="select search_input">
                <label for="max_doors">Portes Min</label>
                <select name="min_doors" id="">
                    <option value="">Tout</option>
                    <option value="3">2/3</option>
                    <option value="5">4/5</option>
                    <option value="7">6/7</option>
                </select>
            </div>
            <div class="select search_input">
                <label for="max_doors">Portes Max</label>
                <select name="max_doors" id="">
                    <option value="">Tout</option>
                    <option value="3">2/3</option>
                    <option value="5">4/5</option>
                    <option value="7">6/7</option>
                </select>
            </div>

        </div>
        <div class="accordion">Couleur</div>
        <div class="panel">
            <div class="color">
                <input type="checkbox" class="check" name="color[]" value="Noir">
                <label for="color1">Noir</label>
            </div>
            <div class="color">
                <input type="checkbox" class="check" name="color[]" value="Gris">
                <label for="color2">Gris</label>
            </div>
            <div class="color">
                <input type="checkbox" class="check" name="color[]" value="Blanc">
                <label for="color3">Blanc</label>
            </div>
            <div class="color">
                <input type="checkbox" class="check" name="color[]" value="Bleu">
                <label for="color4">Bleu</label>
            </div>
            <div class="color">
                <input type="checkbox" class="check" name="color[]" value="Rouge">
                <label for="color5">Rouge</label>
            </div>
            <div class="color">
                <input type="checkbox" class="check" name="color[]" value="Vert">
                <label for="color6">Vert</label>
            </div>
            <div class="color">
                <input type="checkbox" class="check" name="color[]" value="Jaune">
                <label for="color7">Jaune</label>
            </div>
            <div class="color">
                <input type="checkbox" class="check" name="color[]" value="Orange">
                <label for="color8">Orange</label>
            </div>
            <div class="color">
                <input type="checkbox" class="check" name="color[]" value="Violet">
                <label for="color9">Violet</label>
            </div>
            <div class="color">
                <input type="checkbox" class="check" name="color[]" value="Beige">
                <label for="color10">Beige</label>
            </div>
            <div class="color">
                <input type="checkbox" class="check" name="color[]" value="Marron">
                <label for="color11">Marron</label>
            </div>
        </div>

        <div class="accordion">Boîte de vitesse</div>
        <div class="panel">
            <div>    
                <input type="checkbox" class="check" name="gearbox[]" value="Manuelle">
                <label for="gearbox1">Manuelle</label>
            </div>
            
            <div>
                <input type="checkbox" class="check" name="gearbox[]" value="Automatique">
                <label for="gearbox2">Automatique</label>
            </div>
        </div>

        <div class="accordion">Carburant</div>
        <div class="panel">
            <div>    
                <input type="checkbox" class="check" name="fuel_type[]" id="" value="Electrique">
                <label for="fuel_type1">Electrique</label>
            </div>
            
            <div>
                <input type="checkbox" class="check" name="fuel_type[]" id="" value="Essence">
                <label for="fuel_type2">Essence</label>
            </div>

            <div>
                <input type="checkbox" class="check" name="fuel_type[]" id="" value="Diesel">
                <label for="fuel_type3">Diesel</label>
            </div>
            
            <div>
                <input type="checkbox" class="check" name="fuel_type[]" id="" value="Hybride">
                <label for="fuel_type4">Hybride</label>
            </div>
        </div>
        <div class="accordion">Kilométrage</div>
        <div class="panel">
            <div class="select search_input">
                <label for="max_kilometers">Kilomètres Min</label>
                <select name="min_kilometers" id="">
                    <option value="">Tout</option>
                    <option value="10000">10 000 km</option>
                    <option value="25000">25 000 km</option>
                    <option value="50000">50 000 km</option>
                    <option value="75000">75 000 km</option>
                    <option value="100000">100 000 km</option>
                    <option value="150000">150 000 km</option>
                    <option value="200000">200 000 km</option>
                </select>
            </div>
            <div class="select search_input">
                <label for="max_kilometers">Kilomètres Max.</label>
                <select name="max_kilometers" id="">
                    <option value="">Tout</option>
                    <option value="10000">10 000 km</option>
                    <option value="25000">25 000 km</option>
                    <option value="50000">50 000 km</option>
                    <option value="75000">75 000 km</option>
                    <option value="100000">100 000 km</option>
                    <option value="150000">150 000 km</option>
                    <option value="200000">200 000 km</option>
                </select>
            </div>
        </div>
        <div class="accordion">Année de première mise en circulation</div>
        <div class="panel">
            <div class="select search_input">
                <label for="min_registration_year">Année Min</label>
                <select name="min_registration_year" id="">
                    <option value="">Tout</option>
                    @for ($i = date("Y"); $i >= 2000; $i--)
                        <option value={{$i}}>{{$i}}</option>
                    @endfor
                </select>
            </div>
            <div class="select search_input">
            <label for="max_registration_year">Année Max</label>
                <select name="max_registration_year" id="">
                    <option value="">Tout</option>
                    @for ($i = date("Y"); $i >= 2000; $i--)
                        <option value={{$i}}>{{$i}}</option>
                    @endfor
                </select>
            </div>
        </div>
        <div class="accordion">Options</div>
        <div class="panel">
                @foreach($options as $option)
                    <div>    
                        <input type="checkbox" class="check" name="options[]" id="" value={{$option->name}}>
                        <label for="options[]">{{$option->name}}</label>
                    </div>
                @endforeach 
        </div>
        <button type="submit">Chercher</button>
    </form>
</div>

<script>
var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var panel = this.nextElementSibling;
    if (panel.style.maxHeight) {
      panel.style.maxHeight = null;
    } else {
      panel.style.maxHeight = panel.scrollHeight + "px";
    }
  });
}
</script>