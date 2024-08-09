<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\MobilRental;
use App\Models\ServisRental;

class DashboardController extends Controller
{
    public function index(){

        $cars = MobilRental::with('harga')->latest()->get();
        $services = ServisRental::all();
        return view ('frontend.dashboard', compact('cars', 'services'));
    }
}
