<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('productId');
            $table->string('productName',50);
            $table->Integer('categoryId')->unsigned();
            $table->foreign('categoryId')->references('id')->on('categories');
            $table->Integer('manufactureId')->unsigned();
            $table->foreign('manufactureId')->references('id')->on('manufactures');
            $table->Integer('brandId');
            $table->text('productShortDescription');
            $table->text('productLongDescription');
            $table->text('productImage');
            $table->double('productPrice',10,2);
            $table->string('productQty');
            $table->string('productSize',20);
            $table->string('productColor',20);
            $table->tinyInteger('publicationStatus');
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
}
