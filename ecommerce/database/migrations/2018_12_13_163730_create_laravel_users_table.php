<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLaravelUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('laravel_users', function (Blueprint $table) {
            $table->increments('user_id');
            $table->string('name', 30);
            $table->string('user_name', 30)->unique();
            $table->string('email', 30)->unique();
            $table->string('password', 255);
            $table->string('gender', 8);
            $table->string('dob', 20);
            $table->string('country', 30);
            $table->string('image', 35);
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
        Schema::dropIfExists('laravel_users');
    }
}
