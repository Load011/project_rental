<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Sewa;
use App\Models\MobilRental;

class SewaController extends Controller
{
    public function index(){
        $rents = Sewa::all();
        return view('sewa.index', compact('rents'));
    }

    public function create(){
        $cars = MobilRental::all();
        return view ('sewa.create', compact( 'cars'));
    }
    public function store(Request $request)
    {
        $request->validate([
            'mobil_id' => 'required',
            'service_id' => 'required',
            'nama_penyewa' => 'required',
            'no_hp' => 'required',
            'alamat_penyewa' => 'required',
            'email_penyewa' => 'required',
            'lama_sewa' => 'required|integer',
            'penjemputan' => 'required|date',
        ]);

        Sewa::create([
            'mobil_id' => $request->mobil_id,
            'service_id' => $request->service_id,
            'nama_penyewa' => $request->nama_penyewa,
            'no_hp' => $request->no_hp,
            'alamat_penyewa' => $request->alamat_penyewa,
            'email_penyewa' => $request->email_penyewa,
            'lama_sewa' => $request->lama_sewa,
            'penjemputan' => $request->penjemputan,
        ]);

        return redirect()->back()->with('success', 'Rental booking successful!');
    }

}
