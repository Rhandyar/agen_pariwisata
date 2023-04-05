<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\paket_wisata;
class PaketWisataController extends Controller
{ 
    public function create(Request $request)
    {
        $validation=$request->validate([
            'nama_paket' => 'required',
            'deskripsi' => 'required',
            'fasilitas' => 'required',
            'itinery' => 'required',
            'diskon' => 'required',
            'foto1' => 'required',
            'foto2' => 'required',
            'foto3' => 'required',
            'foto4' => 'required',
            'foto5' => 'required',
        ]);
    }
    public function delete(paket_wisata $paket_wisata)
    {
        $paket_wisata->delete();
    }

    public function update(paket_wisata $paket_wisata, Request $request){
        $validation=$request->validate([
            'nama_paket' => 'required',
            'deskripsi' => 'required',
            'fasilitas' => 'required',
            'itinery' => 'required',
            'diskon' => 'required',
            'foto1' => 'required',
            'foto2' => 'required',
            'foto3' => 'required',
            'foto4' => 'required',
            'foto5' => 'required',
        ]);
        $paket_wisata->update($validation);
    }
}
