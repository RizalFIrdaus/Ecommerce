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
        Schema::create('flavor', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('product_id');
            $table->float('price');
            $table->string('name');
            $table->float('weight');
            $table->mediumText('info');
            $table->longText('description');
            $table->longText('composition');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('flavor');
    }
};
