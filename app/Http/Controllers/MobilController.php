<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MobilRental;

class MobilController extends Controller
{
    public function index(){
        $cars = MobilRental::all();

        return view('mobil.index', compact('cars'));
    }

    public function create(Request $request){
        $cars = MobilRental::all();

        return view ('mobil.create', compact('cars'));
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama_mobil' => 'required|string|max:255',
            'harga_sewa' => 'required|numeric',
            'deskripsi_mobil' => 'required|string',
            'mileage' => 'required|integer',
            'foto_mobil' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            'tmp_duduk' => 'required|integer',
            'bahan_bakar' => 'required|string|max:255',
        ]);

        if ($request->hasFile('foto_mobil')) {
            $file = $request->file('foto_mobil');
            $filename = time() . '_' . $file->getClientOriginalName();
            $filePath = $file->storeAs('uploads/foto_mobil', $filename, 'public');
        }

        $car = new MobilRental();
        $car->nama_mobil = $request->nama_mobil;
        $car->harga_sewa = $request->harga_sewa;
        $car->deskripsi_mobil = $request->deskripsi_mobil;
        $car->mileage = $request->mileage;
        $car->foto_mobil = $filePath;
        $car->tmp_duduk = $request->tmp_duduk;
        $car->bahan_bakar = $request->bahan_bakar;
        $car->save();

        return redirect()->route('mobil.index')->with('success', 'Mobil successfully added');
    }
}
