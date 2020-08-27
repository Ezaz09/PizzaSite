<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterSomeColumns extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('products', function (Blueprint $table) {
            $table->dropColumn('srcOfImage');
            $table->text('src_of_image')->after('description');
        });

        Schema::table('orders', function (Blueprint $table) {
            $table->dropColumn('numberOfOrder');
            $table->string('number_of_order')->after('user_id');

            $table->dropColumn('deliveryAddress');
            $table->string('delivery_address')->nullable()->after('surname');

            $table->dropColumn('totalPrice');
            $table->double('total_price')->default(1)->after('delivery_address');

            $table->dropColumn('currencyOfOrder');
            $table->string('currency_of_order')->default('$')->after('total_price');
          
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('products', function(Blueprint $table){
            $table->dropColumn('src_of_image');
            $table->text('srcOfImage')->after('description');
        });

        Schema::table('orders', function (Blueprint $table) {
            $table->dropColumn('number_of_order');
            $table->string('numberOfOrder')->after('user_id');

            $table->dropColumn('delivery_address');
            $table->string('deliveryAddress')->nullable()->after('surname');

            $table->dropColumn('total_price');
            $table->double('totalPrice')->default(1)->after('deliveryAddress');

            $table->dropColumn('currency_of_order');
            $table->string('currencyOfOrder')->default('$')->after('totalPrice');
        });
    }
}
