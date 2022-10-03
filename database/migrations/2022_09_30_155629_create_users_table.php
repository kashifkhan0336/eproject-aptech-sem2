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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string("username",28)->default("mastermind0336");
            $table->string("password");
            $table->timestamp("deleted_at");
            $table->string("name")->default("Kashif Khan");
            $table->string("firstName",255)->nullable();
            $table->string("lastName",255)->nullable();
            $table->string("email",255);
            $table->string('remember_token', 100)->nullable();
            $table->string("role")->nullable();
            $table->bigInteger('base_id')->unsigned();
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
        Schema::dropIfExists('users');
    }
};
