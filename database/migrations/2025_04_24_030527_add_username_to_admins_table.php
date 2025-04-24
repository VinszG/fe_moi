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
    Schema::table('admins', function (Blueprint $table) {
        $table->string('username')->unique()->after('email');  // Menambahkan kolom username setelah email
    });
}

    /**
     * Reverse the migrations.
     */
    public function down()
{
    Schema::table('admins', function (Blueprint $table) {
        $table->dropColumn('username');  // Menghapus kolom username jika migrasi dibatalkan
    });
}
};
