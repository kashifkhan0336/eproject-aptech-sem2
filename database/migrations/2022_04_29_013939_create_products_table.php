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
            $table->BigInteger("product_id")->nullable()->unique()->unsigned();
            $table->bigInteger("category_id")->unsigned();
            $table->foreign("category_id")->references('id')->on("categories");
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
