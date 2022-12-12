<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('province', function (Blueprint $table) {
            $table->longText('description')->after('vector');
            $table->longText('kebudayaan')->after('description');
            $table->longText('makanan')->after('kebudayaan');
            $table->string('image')->after('makanan');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('province', function (Blueprint $table) {
            //
        });
    }
};
