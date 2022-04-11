<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignToTransaksiPembelianBarangTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('transaksi_pembelian_barang', function (Blueprint $table) {
            $table->foreign('transaksi_pembelian_id')->references('id')->on('transaksi_pembelian')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('transaksi_pembelian_barang', function (Blueprint $table) {
            $table->dropForeign(['transaksi_pembelian_id']);
        });
    }
}
