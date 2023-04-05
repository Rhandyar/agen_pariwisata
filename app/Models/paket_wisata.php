<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class paket_wisata extends Model
{ public function daftar_pakets(){
    return $this->belongsTo(daftar_paket::class);
}
    use HasFactory;
}
