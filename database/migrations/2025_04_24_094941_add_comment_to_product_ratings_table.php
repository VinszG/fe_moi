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
    Schema::table('product_ratings', function (Blueprint $table) {
        $table->text('message')->nullable();  // Kolom komentar
        $table->boolean('verified')->default(false);  // Kolom verifikasi, default false
    });
}

public function down()
{
    Schema::table('product_ratings', function (Blueprint $table) {
        $table->dropColumn('message');
        $table->dropColumn('verified');
    });
}

};
