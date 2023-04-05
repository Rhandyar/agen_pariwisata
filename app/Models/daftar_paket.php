<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class daftar_paket extends Model
{ public function paket_wisatas(){
    return $this->hasmany(paket_wisata::class);
}
public function reservasis(){
    return $this->belongsTo(reservasi::class);
}
    use HasFactory;
}
