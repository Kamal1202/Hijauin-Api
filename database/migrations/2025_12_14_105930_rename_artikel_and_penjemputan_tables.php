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
        Schema::rename('artikel', 'jemputan');
        Schema::rename('penjemputan', 'artikel');
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::rename('jemputan', 'artikel');
        Schema::rename('artikel', 'penjemputan');
    }
};
