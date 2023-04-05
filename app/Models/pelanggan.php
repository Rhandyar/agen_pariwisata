<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pelanggan extends Model
{ public function users(){
    return $this->belongsTo(User::class, 'user_id', 'id');
}
public function reservasis(){
    return $this->belongsTo(reservasi::class);
}
    use HasFactory;
}
