<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
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
            $table->string('title');
            $table->unsignedBigInteger('category_id');
            $table->unsignedBigInteger('type_id');
            $table->string('code');
            $table->string('price');
            $table->longtext('description');
            $table->mediumtext('main_image');
            $table->mediumtext('other_image1');
            $table->mediumtext('other_image2');
            $table->mediumtext('other_image3');
            $table->mediumtext('other_image4');
            $table->longtext('additional_info');
            $table->SoftDeletes();
            $table->timestamps();

            // $table->foreign('category_id')->references('id')->on('product_categories')
            //     ->onDelete('cascade')
            //     ->onUpdate('cascade');

            // $table->foreign('type_id')->references('id')->on('product_types')
            //     ->onDelete('cascade')
            //     ->onUpdate('cascade');
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
