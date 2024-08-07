<?php

namespace App\Http\Controllers;

use App\Models\Supir;
use Illuminate\Http\Request;

class SupirController extends Controller
{
    public function index(){
        $drivers = Supir::all();
        return view ('supir.index', compact('drivers'));
    }

    public function create(){
        return view ('supir.create');
    }

    public function store(Request $request){
        $no_tlp = $request->input('no_tlp');
        $no_tlp = preg_replace('/^\+|\D/', '', $no_tlp);

        $validateData = $request->validate([
            'nama_supir' => 'required',
            'no_tlp' => 'required',
            'no_ktp' => 'required',
            'no_sim' => 'required',
            'alamat_supir' => 'required'
        ]);

        $supir = Supir::create($validateData);

        return redirect()->route('supir.index')->with('success', 'Supir Berhasil Ditambahkan');

    }

    public function edit(Supir $supir){
        return view('supir.edit', compact('supir'));
    }
    
    public function update(Request $request, Supir $supir){ 
        $no_tlp = $request->input('no_tlp');
        $no_tlp = preg_replace('/^\+|\D/', '', $no_tlp);  
        $validateData = $request->validate([
            'nama_supir' => 'required',
            'no_tlp' => 'required',
            'no_ktp' => 'required',
            'no_sim' => 'required',
            'alamat_supir' => 'required',

        ]);
    
        $supir->update($validateData);
    
        return redirect()->route('supir.index')->with('success', 'Supir Berhasil diedit');
    }

    public function destroy (Supir $supir){
        $supir->delete();

        return redirect()->route('supir.index')->with('success', 'Asset deleted successfully.');
    }

}
