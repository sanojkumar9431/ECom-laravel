<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAddproductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('addproducts', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->integer('price');

            $table->unsignedBigInteger('category');
            
            $table->foreign('category')->references('id')->on('category');
           
            $table->string("description");
            $table->string("image");
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
        Schema::dropIfExists('addproducts');
    }
}
