<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\reservasi;
class ReservasiController extends Controller
{
    public function create(Request $request)
    {
        $validation=$request->validate([
            'id_pelanggan' => 'required',
            'id_daftar_paket' => 'required',
            'tgl_reservasi_wisata' => 'required',
            'harga' => 'required',
            'jumlah_peserta' => 'required',
            'diskon' => 'required',
            'nilai_diskon' => 'required',
            'total_bayar' => 'required',
            'file_bukti_tf' => 'required',
            'status_reservasi_wisata' => 'required|in:pesan, dibayar, selesai',
        ]);
    }
    public function delete(reservasi $reservasi)
    {
        $reservasi->delete();
    }

    public function update(reservasi $reservasi, Request $request){
        $validation=$request->validate([
            'id_pelanggan' => 'required',
            'id_daftar_paket' => 'required',
            'tgl_reservasi_wisata' => 'required',
            'harga' => 'required',
            'jumlah_peserta' => 'required',
            'diskon' => 'required',
            'nilai_diskon' => 'required',
            'total_bayar' => 'required',
            'file_bukti_tf' => 'required',
            'status_reservasi_wisata' => 'required|in:pesan, dibayar, selesai',
        ]);
        $reservasi->update($validation);
    }
}
