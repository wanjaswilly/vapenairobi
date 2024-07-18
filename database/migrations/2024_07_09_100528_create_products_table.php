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
            $table->string('productName');
            $table->enum('productCategory', ['disposables','devices','e-liquids','others'])->default('disposables');
            $table->integer('productPrice');
            $table->json('productFlavours')->nullable();
            $table->string('productManufacturer')->nullable();
            $table->string('productShortDescription')->nullable();
            $table->text('productLongDescription')->nullable();
            $table->string('productBaseImage')->nullable();
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
