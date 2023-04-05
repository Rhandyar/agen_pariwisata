<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\karyawan;

class KaryawanController extends Controller
{
    public function create(Request $request)
    {
        $validation=$request->validate([
            'nama_karyawan' => 'required',
            'alamat' => 'required',
            'no_hp' => 'required',
            'jabatan' => 'required|in:administrasi, operator, pemilik',
        ]);
    }
    public function delete(karyawan $karyawan)
    {
        $karyawan->delete();
    }

    public function update(karyawan $karyawan, Request $request){
        $validation=$request->validate([
            'nama_karyawan' => 'required',
            'alamat' => 'required',
            'no_hp' => 'required',
            'jabatan' => 'required|in:administrasi, operator, pemilik',
        ]);
        $karyawan->update($validation);
    }
}
