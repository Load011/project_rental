<?php

namespace App\Http\Controllers;

use App\Models\MobilRental;
use App\Models\MobilService;
use App\Models\ServisRental;
use Illuminate\Http\Request;

class MobilServiceController extends Controller
{
    public function index(){
        $moses = MobilService::all();

        return view('mo_srv.index', compact('moses'));
    }

    public function create(){
        $cars = MobilRental::all();
        $services = ServisRental::all();
        return view ('mo_srv.create', compact('cars', 'services'));
    }

    public function store(Request $request){
        $request['harga_service'] = $this->convertToNumeric($request['harga_service']);

        $request->validate([
            'car_id' => 'required|exists:m_mobil,id',
            'service_id' => 'required|exists:m_service,id',
            'harga_service' => 'required'
        ]);
        
        MobilService::create($request->all());

        return redirect()->route('mo_srv.index')->with('success', 'Service Berhasil Ditambahkan');
    }

    private function convertToNumeric($value)
    {
        return empty($value) ? null : floatval(str_replace('.', '', $value));
    }
}
