<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('artikel', function (Blueprint $table) {
        $table->id();

        $table->foreignId('id_user')
            ->constrained('users')
            ->onDelete('cascade');

        $table->foreignId('id_driver')
            ->nullable()
            ->constrained('users')
            ->onDelete('set null');

        $table->foreignId('id_setor')
            ->nullable()
            ->constrained('setoran_sampah')
            ->onDelete('set null');

        $table->string('alamat_jemput');
        $table->decimal('longitude', 10, 7);
        $table->decimal('latitude', 10, 7);
        $table->dateTime('jadwal_jemput');
        $table->string('status');
        $table->text('catatan')->nullable();

        $table->timestamps();
    });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('artikel');
    }
};