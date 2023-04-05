<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\daftar_paket;
class DaftarPaketController extends Controller
{
    public function create(Request $request)
    {
        $validation=$request->validate([
            'nama_paket' => 'required',
            'id_paket_wisata' => 'required',
            'jumlah_peserta' => 'required',
            'harga_paket' => 'required',
        ]);
    }
    public function delete(daftar_paket $daftar_paket)
    {
        $daftar_paket->delete();
    }

    public function update(daftar_paket $daftar_paket, Request $request){
        $validation=$request->validate([
            'nama_paket' => 'required',
            'id_paket_wisata' => 'required',
            'jumlah_peserta' => 'required',
            'harga_paket' => 'required',
        ]);
        $daftar_paket->update($validation);
    }
}
