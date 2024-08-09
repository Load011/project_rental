<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\MobilRental;
use App\Models\MobilService;
use App\Models\ServisRental;

class ServiceController extends Controller
{
    public function index(){
        return view ('frontend.service');
    }

    public function rental(){
        $cars = MobilRental::all();
        $services = ServisRental::all();
        $carServices = MobilService::all();
        return view ('frontend.rent', compact('cars', 'services', 'carServices'));
    }

}


//     public function rental(){
//         $serviceId = 1;
//         $cars = MobilRental::join('m_mobil_service', 'm_mobil.id', '=', 'm_mobil_service.car_id')
//         ->join('m_service', 'm_mobil_service.service_id', '=', 'm_service.id')
//         ->where('m_service.id', $serviceId)
//         ->select('m_mobil.*', 'm_mobil_service.harga_service', 'm_service.nama_service')
//         ->get();
//         return view('frontend.rent', compact('cars'));
//     }

//     public function showWedding()
//     {
//         $serviceId = 2;
//         $cars = MobilRental::join('m_mobil_service', 'm_mobil.id', '=', 'm_mobil_service.car_id')
//                             ->join('m_service', 'm_mobil_service.service_id', '=', 'm_service.id')
//                             ->where('m_service.id', $serviceId)
//                             ->select('m_mobil.*', 'm_mobil_service.harga_service', 'm_service.nama_service')
//                             ->get();

//         return view('frontend.wedding', compact('cars'));
//     }
