<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClientxproductTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('clientxproduct', function (Blueprint $table) {
          $table->increments('id');

          $table->integer('clientid');
          $table->integer('productid');

          $table->text('description');

          $table->timestamps();

          $table->foreign('clientid')->references('id')->on('client');
          $table->foreign('productid')->references('id')->on('product');
      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('clientxproduct');
    }
}
