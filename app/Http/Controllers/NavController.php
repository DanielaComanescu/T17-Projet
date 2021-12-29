<?php

namespace App\Http\Controllers;
use App\Models\Car;
use App\Models\Option;
use App\Models\User;

use Illuminate\Http\Request;

class NavController extends Controller
{
    public function welcome() {
        return view('welcome');
    }

    public function faq() {
        return view('faq');
    }

    public function services() {
        return view('services');
    }
    public function updateCar($id) {
        $car = Car::findOrFail($id);
        return view('updateCarId', ['car' => $car]);
    }
}
