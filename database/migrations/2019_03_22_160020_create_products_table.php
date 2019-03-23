<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
           
            $table->increments('id');
            $table->string('name_en')->nullable();
            $table->string('name_ar');
            $table->text('body_en')->nullable();
            $table->text('body_ar');
            $table->tinyInteger('category_id');
            $table->string('key');
            $table->float('price');
            $table->text('colors')->nullable();
            $table->text('sizes')->nullable();
            $table->string('pic1')->nullable();
            $table->string('pic2')->nullable();
            $table->string('pic3')->nullable();
            $table->smallInteger('sale')->nullable();
            $table->tinyInteger('status')->default('1');
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
