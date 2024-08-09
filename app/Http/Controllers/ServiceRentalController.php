<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ServisRental;

class ServiceRentalController extends Controller
{
    public function index(){
        $services = ServisRental::all();
        return view ('service.index', compact('services'));
    }

    public function create(){
        return view ('service.create');
    }

    public function store(Request $request){
        $request['upah_supir'] = $this->convertToNumeric($request['upah_supir']);

        $request->validate([
            'nama_service' => 'required|string',
            'upah_supir' => 'required',
            'deskripsi_servis'
        ]);
        
        ServisRental::create($request->all());

        return redirect()->route('service.index')->with('success', 'Service Berhasil Ditambahkan');
    }
    private function convertToNumeric($value)
    {
        return empty($value) ? null : floatval(str_replace('.', '', $value));
    }
}
