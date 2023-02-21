<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransaksisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transaksis', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_outlet');
            $table->string('kd_invoice');
            $table->unsignedBigInteger('id_member');
            $table->unsignedBigInteger('id_produk');
            $table->integer('qty');
            $table->dateTime('tgl');
            $table->dateTime('batas_waktu');
            $table->dateTime('tgl_bayar');
            $table->integer('biaya_tambahan');
            $table->integer('diskon');
            $table->integer('pajak');
            $table->enum('status', ['baru','proses','selesai','diambil']);
            $table->enum('dibayar', ['selesai_bayar','belum_bayar']);
            $table->text('keterangan');
            $table->timestamps();

            $table->foreign('id_outlet')->references('id')->on('outletts');

            $table->foreign('id_member')->references('id')->on('members');

            $table->foreign('id_produk')->references('id')->on('produks');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('transaksis');
    }
}
