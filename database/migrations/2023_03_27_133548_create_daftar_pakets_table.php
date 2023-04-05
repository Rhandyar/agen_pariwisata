<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\paket_wisata;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('daftar_pakets', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('nama_paket');
            $table->foreignIdFor(paket_wisata::class);
            $table->integer('jumlah_peserta');
            $table->bigInteger('harga_paket');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('daftar_pakets');
    }
};
