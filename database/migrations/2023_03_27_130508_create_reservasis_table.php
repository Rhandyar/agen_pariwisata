<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reservasis', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            // $table->foreignIdFor(pelanggan::class);
            // $table->foreignIdFor(daftar_paket::class);
            $table->datetime('tgl_reservasi_wisata');
            $table->integer('harga');
            $table->integer('jumlah_peserta');
            $table->decimal('diskon');
            $table->float('nilai_diskon');
            $table->bigInteger('total_bayar');
            $table->text('file_bukti_tf');
            $table->enum('status_reservasi_wisata', ['pesan', 'dibayar', 'selesai'])->default('pesan');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reservasis');
    }
};
