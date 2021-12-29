<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cars', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->integer('user_id');
            $table->string('status')->default('En cours de validation');
            $table->string('number_plate');
            $table->integer('make_id');
            $table->string('model');
            $table->string('price'); // notre site est en europe uniquement, mais il pourrait y avoir plusieurs devises dans le futur, d'où le string
            $table->integer('kilometers');
            $table->string('fuel_type'); // à changer plus tard(on est pas certains de l'appelation)// fuel / gas / electric
            $table->string('gearbox'); // automatique / manuelle
            $table->string('power');  
            $table->string('registration_year');
            $table->string('color');
            $table->integer('doors');
            $table->integer('seats');
            $table->string('tc'); // CT à changer peut être au format mm/yyyy
            $table->string('last_check'); // au format mm/yyyy
            $table->string('car_image')->nullable();
            // $table->file(''); IMAGES et on verra comment faire, il en faut 5MAX
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cars');
    }
}
