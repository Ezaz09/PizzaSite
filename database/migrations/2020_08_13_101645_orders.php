<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Orders extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->integer('idOfUser')->nullable();
            $table->string('numberOfOrder');
            $table->string('name')->nullable();
            $table->string('surname')->nullable();
            //$table->string('product');
            $table->string('deliveryAddress')->nullable();
            //$table->bigInteger('countOfProduct');
            //$table->bigInteger('amountPerLine');
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
        Schema::dropIfExists('orders');
    }
}
