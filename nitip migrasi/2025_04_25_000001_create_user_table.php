<?php

  use Illuminate\Database\Migrations\Migration;
  use Illuminate\Database\Schema\Blueprint;
  use Illuminate\Support\Facades\Schema;

  return new class extends Migration
  {
      public function up(): void
      {
          Schema::create('users', function (Blueprint $table) {
              $table->id();
              $table->string('nama_lengkap');
              $table->string('email')->unique();
              $table->string('password');
              $table->string('phone')->nullable();
              $table->text('address')->nullable();
              $table->string('role')->default(['umum', 'pelajar', 'admin']);
              $table->string('identity_number')->nullable();
              $table->string('institution')->nullable();
              $table->timestamp('email_verified_at')->nullable();
              $table->timestamps();
          });
      }

      public function down(): void
      {
          Schema::dropIfExists('users');
      }
  };
