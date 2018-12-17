<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLaravelProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('laravel_products', function (Blueprint $table) {
             $table->increments('id');
            $table->string('name', 100)->unique();
            $table->text('description');
            $table->string('brnad', 11);
            $table->string('category', 11);
            $table->string('wstart');
//            $table->string('wend');
//            $table->string('quantity', 11);
            $table->string('image', 105);
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
        Schema::dropIfExists('laravel_products');
    }
}
