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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('nama_lengkap'); // Nama lengkap
            $table->string('email')->unique(); // Email (opsional untuk login)
            $table->string('password'); // Password untuk login (jika diperlukan)
            $table->string('phone')->unique(); // Nomor HP
            $table->text('address'); // Alamat
            $table->enum('user_type', ['umum', 'pelajar']); // Kategori pengguna
            $table->string('identity_number')->unique(); // NIK/NISN
            $table->string('institution')->nullable(); // Sekolah/universitas (hanya untuk pelajar)
            $table->string('library_card_number')->unique(); // Nomor kartu perpustakaan
            $table->timestamps(); // created_at & updated_at
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
};
