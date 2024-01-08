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
        Schema::table('contacts', function (Blueprint $table) {
            $table->text('deskripsi');
            $table->text('deskripsi_footer');
            $table->text('judul');
            $table->string('no_support');
            $table->string('no_konsultasi');
            $table->string('email_support');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('contacts', function (Blueprint $table) {
            $table->dropColumn('deskripsi');
            $table->dropColumn('deskripsi_footer');
            $table->dropColumn('judul');
            $table->dropColumn('no_support');
            $table->dropColumn('no_konsultasi');
            $table->dropColumn('email_support');
        });
    }
};
