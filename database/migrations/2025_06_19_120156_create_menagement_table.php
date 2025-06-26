<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::create('menagement', function (Blueprint $table) {
            $table->id();
            $table->string('judul');
            $table->text('deskripsi');
            $table->string('penanggung_jawab');
            $table->date('deadline');
            $table->string('file_tugas')->nullable();
            $table->string('link_github')->nullable(); // Tambahan
            $table->string('link_drive')->nullable();  // Tambahan
            $table->timestamps();
        });
    }

    public function down(): void {
        Schema::dropIfExists('menagement');
    }
};
