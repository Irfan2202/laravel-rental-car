<?php

namespace App\Http\Controllers;

use App\Models\Car;

class CarController extends Controller
{


    public function index()
    {
        $cars = Car::all();
        return view('public.pages.cars.index', compact('cars'));
    }
}
