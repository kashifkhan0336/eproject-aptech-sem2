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
        Schema::create('carts', function (Blueprint $table) {
            $table->id();
            $table->bigInteger("customer_id")->unsigned();
            $table->bigInteger("product_id")->unsigned();
            $table->integer("quantity")->default(1);
            $table->foreign("customer_id")->references('id')->on("customers");
            $table->foreign("product_id")->references('product_id')->on("products");
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
        Schema::dropIfExists('carts');
    }
};
