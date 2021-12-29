<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Car;
use App\Models\Option;
use App\Models\Make;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Builder;




class CarController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index(Request $request)
    {
        if ($request->isMethod('post')){
            $cars = new Car;
            $cars = $cars->filter($request)->get();
        }
        else {
            $cars = Car::where('status', 'En vente')->get();
        }
        $options = Option::all();
        $makes = Make::all();
        return view('/cars_list', [
            'cars' => $cars,
            'makes' => $makes,
            'options' => $options,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $options = Option::all();
        $makes = Make::all();
        return view('addCar', [
            'makes' => $makes,
            'options' => $options
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $car = new Car;
        $car->user_id = auth()->id();
        $car->status = "En vente";
        $car->car_image = $request->car_image;
        $car->number_plate = $request->number_plate;
        $car->make_id = $request->make;
        $car->model = $request->model;
        $car->price = $request->price;
        $car->kilometers = $request->kilometers;
        $car->fuel_type = $request->fuel_type;
        $car->gearbox = $request->gearbox;
        $car->power = $request->power;
        $car->registration_year = $request->registration_year;
        $car->color = $request->color;
        $car->doors = $request->doors;
        $car->seats = $request->seats;
        $car->tc = $request->tc;
        $car->last_check = $request->last_check;
        $car->save();

        return redirect('/search');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Car $car)
    {
        $this->authorize('view', $car);
        return view('car_detail', ['car' => $car]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Car $car)
    {
        $this->authorize('update', $car);
        $makes = Make::all();
        $options = Option::all();
        return view('updateCarId', [
            'car' => $car,
            'options' => $options,
            'makes' => $makes,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Car $car)
    {
        // $car = Car::findOrFail($id);
        $this->authorize('update', $car);
        $car->status = "En cours de validation";
        $car->car_image = $request->car_image;
        $car->number_plate = $request->number_plate;
        $car->make = $request->make;
        $car->model = $request->model;
        $car->price = $request->price;
        $car->kilometers = $request->kilometers;
        $car->fuel_type = $request->fuel_type;
        $car->gearbox = $request->gearbox;
        $car->power = $request->power;
        $car->registration_year = $request->registration_year;
        $car->color = $request->color;
        $car->doors = $request->doors;
        $car->seats = $request->seats;
        $car->tc = $request->tc;
        $car->last_check = $request->last_check;
        $car->save();
        return redirect()->route('car', [$car]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Car $car)
    {
        $this->authorize('delete', $car);
        $car->delete();
        return redirect('/myCars');
    }

    public function myCars()
    {   
        return view('myCars');
    }

    public function reviewCar()
    {   
        $cars = Car::where('status', 'En cours de validation')->get();
        return view('reviewCar', ['cars' => $cars]);
    }
}
