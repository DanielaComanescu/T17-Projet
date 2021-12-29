<?php

namespace App\Http\Traits;

use App\Models\Car;
use Illuminate\Database\Eloquent\Builder;

trait FilterTrait {

    public function filter($request) {
        $query = Car::query();

        if ($request->status) {
            $query->whereIn('status', $request->status);
        }
        else {
            $query->where('status', 'En vente');
        }

        if ($request->makes) {
            $query->whereIn('make_id', $request->makes);
        }

        if ($request->color) {
            $query->where('color', $request->color);
        }

        if ($request->gearbox) {
            $query->whereIn('gearbox', $request->gearbox);
        }

        if ($request->fuelype) {
            $query->whereIn('fuelype', $request->fuelype);
        }

        if ($request->min_price) {
            $query->where('price','>=', $request->min_price);
        }

        if ($request->max_price) {
            $query->where('price','<=', $request->max_price);
        }

        if ($request->min_kilometers) {
            $query->where('kilometers','>=', $request->min_kilometers);
        }

        if ($request->max_kilometers) {
            $query->where('kilometers','<=', $request->max_kilometers);
        }

        if ($request->min_doors) {
            $query->where('doors','>=', $request->min_doors);
        }

        if ($request->max_doors) {
            $query->where('doors','<=', $request->max_doors);
        }

        if ($request->min_seats) {
            $query->where('seats','>=', $request->min_seats);
        }

        if ($request->max_seats) {
            $query->where('seats','<=', $request->max_seats);
        }

        if ($request->min_registration_year) {
            $query->where('registration_year','>=', $request->min_registration_year);
        }

        if ($request->max_registration_year) {
            $query->where('registration_year','<=', $request->max_registration_year);
        }

        if ($request->options) {
            foreach ($request->options as $option) {
                $query->whereHas('options', function(Builder $q) use ($option) {
                    $q->where('name',$option);
                });
            }
        }
        return $query;
    }
}