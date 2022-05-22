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
        Schema::create('studens', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('email');
            $table->string('npm', 20);
            $table->string('alamat');
            $table->string('kelas', 20);
            $table->string('nama_orang_tua');
            $table->string('perkerjaan_orang_tua');
            $table->string('tempat_tinggal');
            $table->string('no_telp', 25);
            $table->string('goldar');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('studens');
    }
};
