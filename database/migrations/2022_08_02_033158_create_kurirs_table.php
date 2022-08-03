<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKurirsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kurir', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->UnsignedBigInteger('j_layanan_id');
            $table->UnsignedBigInteger('jenis_id');
            $table->UnsignedBigInteger('barang_id');
            $table->UnsignedBigInteger('customer_id');
            $table->string('alamat');
            $table->date('estimasi');
            $table->integer('rating')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('kurir');
    }
}
