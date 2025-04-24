<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RemoveVerifiedFromProductRatings extends Migration
{
    public function up()
    {
        Schema::table('product_ratings', function (Blueprint $table) {
            $table->dropColumn('verified'); // Menghapus kolom verified
        });
    }

    public function down()
    {
        Schema::table('product_ratings', function (Blueprint $table) {
            $table->boolean('verified')->default(false); // Menambah kolom verified jika rollback
        });
    }

};
