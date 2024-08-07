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
            'id_mobil' => 'required|exists:m_mobil,id',
            'nama_penyewa' => 'required',
            'no_hp' => 'required',
            'alamat_penyewa' => 'required',
            'email_penyewa' => 'required',
            'lama_sewa' => 'required|integer',
        ]);

        $car = MobilRental::findOrFail($request->id_mobil);
        $harga_penyewaan = $car->harga_sewa * $request->lama_sewa;

        Sewa::create([
            'id_mobil' => $request->id_mobil,
            'nama_penyewa' => $request->nama_penyewa,
            'no_hp' => $request->no_hp,
            'alamat_penyewa' => $request->alamat_penyewa,
            'email_penyewa' => $request->email_penyewa,
            'lama_sewa' => $request->lama_sewa,
            'harga_penyewaan' => $harga_penyewaan,
        ]);

        return redirect()->route('frontend.rent')->with('success', 'Rental berhasil ditambahkan!');
    }

}
