<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\MobilRental;

class ServiceController extends Controller
{
    public function index(){
        return view ('frontend.service');
    }

    public function rental(){
        $cars = MobilRental::all();
        return view ('frontend.rent', compact('cars'));
    }
}
