<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\MobilRental;
use Illuminate\Http\Request;

class CarController extends Controller
{
    public function index(){
        $cars = MobilRental::paginate(3);
        return view('frontend.car', compact('cars'));
    }
    public function show($id)
    {
        $related_cars = MobilRental::get();
        $car = MobilRental::findOrFail($id);
        return view('frontend.car-details', compact('car', 'related_cars'));
    }

}
