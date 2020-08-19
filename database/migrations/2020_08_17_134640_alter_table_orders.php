<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterTableOrders extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('orders', function(Blueprint $table){
            $table->dropColumn('idOfUser');
            $table->integer('user_id')->nullable()->after('id');
            //$table->renameColumn('idOfUser','user_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('orders', function(Blueprint $table){
            $table->dropColumn('user_id');
            $table->integer('idOfUser')->nullable()->after('id');
            //$table->renameColumn('user_id','idOfUser');
        });
    }
}
