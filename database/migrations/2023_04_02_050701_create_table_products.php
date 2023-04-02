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
        Schema::create('table_products', function (Blueprint $table) {
            $table->id();
            $table->string("name");
            $table->string("img");
            $table->string("category");
            $table->longText("description");
            $table->double('orignal_price');
            $table->double('price');
            $table->double('rating')->nullable();
            $table->string("is_luxury");
            $table->string("gender");
            $table->string("trending")->nullable();
            $table->string("special")->nullable();
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
        Schema::dropIfExists('table_products');
    }
};
