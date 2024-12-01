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
        Schema::table('arsipsurat', function (Blueprint $table) {
            $table->string('file_pdf')->nullable(); // Menambahkan kolom file_pdf
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::table('arsipsurat', function (Blueprint $table) {
            $table->dropColumn('file_pdf'); // Menghapus kolom file_pdf jika rollback
        });
    }
};
