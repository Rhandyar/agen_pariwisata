<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class reservasi extends Model
{   public function pelanggans(){
    return $this->hasmany(pelanggan::class);

}

public function daftar_pakets(){
    return $this->hasmany(daftar_paket::class);
}
    use HasFactory;
}
