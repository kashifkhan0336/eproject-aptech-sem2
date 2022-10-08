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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string("name")->index();
            $table->boolean("is_featured")->default(false);
            $table->longText("desc")->nullable();
            $table->string("price");
            $table->integer("stock")->default(100);
            $table->integer("product_number")->unique();
            $table->integer("product_code");
            $table->integer("product_id")->nullable()->unique();
            $table->bigInteger("category_id")->unsigned();
            $table->bigInteger("cart_id")->unsigned()->nullable()->default(null);
            $table->foreign("category_id")->references('id')->on("categories");
            $table->foreign("cart_id")->references('id')->on("carts");
            $table->timestamp("added")->useCurrent();
//            $table->timestamp("updated")->useCurrentOnUpdate();
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
        Schema::dropIfExists('products');
    }
};
