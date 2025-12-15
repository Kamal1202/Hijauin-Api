<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::table('setoran_sampah', function (Blueprint $table) {
            $table->integer('total_poin')->after('berat_kg');
            $table->integer('total_harga')->after('total_poin');
        });
    }

    public function down()
    {
        Schema::table('setoran_sampah', function (Blueprint $table) {
            $table->dropColumn(['total_poin', 'total_harga']);
        });
    }
};
