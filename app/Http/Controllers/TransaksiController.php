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
            'id_pesanan' => 'required|exists:t_rental_daily,id',
            'id_supir' => 'required|exists:m_supir,id',
        ]);

        $order = Sewa::findOrFail($request->id_pesanan);
        $upah_supir = $order->lama_sewa * 150000;

        Transaksi::create([
            'id_pesanan' => $request->id_pesanan,
            'id_supir' => $request->id_supir,
            'upah_supir' => $upah_supir,
        ]);

        return redirect()->route('transaksi.index')->with('success', 'Transaksi berhasil ditambahkan!');
    }

}
