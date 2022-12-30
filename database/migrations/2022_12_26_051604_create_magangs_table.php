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
        Schema::create('magangs', function (Blueprint $table) {
            $table->id();
            $table->string('nama_instansi');
            $table->string('alamat');
            $table->string('posisi');
            $table->string('pendaftaran_buka');
            $table->string('pendaftaran_tutup');
            $table->integer('durasi');
            $table->enum('status',['Paid','Unpaid'])->default('Unpaid');
            $table->text('benefit')->nullable();
            $table->text('keterangan')->nullable();
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
        Schema::dropIfExists('magangs');
    }
};
