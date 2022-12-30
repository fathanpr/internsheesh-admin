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
        Schema::create('mahasiswas', function (Blueprint $table) {
            $table->id();
            $table->string('nama_lengkap');
            $table->string('npm')->unique();
            $table->string('tanggal_lahir');
            $table->char('no_telp', 12)->nullable();
            $table->enum('prodi',['Informatika','Sistem Informasi'])->default('Informatika');
            $table->string('kelas',2);
            $table->string('alamat');
            $table->foreignId('user_id')->unique()->constrained()->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('mahasiswas');
    }
};
