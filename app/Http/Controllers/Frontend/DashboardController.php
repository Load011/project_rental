<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\MobilRental;

class DashboardController extends Controller
{
    public function index(){

        $cars = MobilRental::latest()->get();
        return view ('frontend.dashboard', compact('cars'));
    }
}
