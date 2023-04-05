<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\pelanggan;

class PelangganController extends Controller
{ 
    public function create(Request $request)
    {
        $validation=$request->validate([
            'nama_lengkap' => 'required',
            'no_hp' => 'required',
            'alamat' => 'required',
            'foto' => 'required',
        ]);
    }
    public function delete(pelanggan $pelanggan)
    {
        $pelanggan->delete();
    }

    public function update(pelanggan $pelanggan, Request $request){
        $validation=$request->validate([
            'nama_lengkap' => 'required',
            'no_hp' => 'required',
            'alamat' => 'required',
            'foto' => 'required',
        ]);
        $pelanggan->update($validation);
    }
}
