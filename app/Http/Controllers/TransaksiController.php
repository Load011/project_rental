<?php

namespace App\Http\Controllers;

use App\Models\Sewa;
use App\Models\Supir;
use App\Models\Transaksi;
use Illuminate\Http\Request;

class TransaksiController extends Controller
{
    public function index(){
        $traqs = Transaksi::with(['sewa.mobil', 'supir'])->get();
        return view ('transaksi.index', compact('traqs'));
    }

    public function create(){
        $drivers = Supir::all();
        $orders = Sewa::all();

        return view ('transaksi.create', compact('drivers', 'orders'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'pemesanan_id' => 'required|exists:t_rental_daily,id',
            'supir_id' => 'required|exists:m_supir,id',
        ]);

        $sewa = Sewa::with('service')->find($request->pemesanan_id);

        $upah_supir = $sewa->service->upah_supir * $sewa->lama_sewa;

        Transaksi::create([
            'pemesanan_id' => $request->pemesanan_id,
            'supir_id' => $request->supir_id,
            'upah_supir' => $upah_supir,
        ]);

        return redirect()->route('transaksi.index')->with('success', 'Transaksi berhasil ditambahkan!');
    }


}
