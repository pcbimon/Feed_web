<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReceivesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('receives', function (Blueprint $table) {
            $table->increments('id');
            $table->string('userid');
            $table->string('customerid');
            $table->string('productid');
            $table->string('analysid');
            $table->integer('no');
            $table->string('ReceiveBy');
            $table->string('ReceiveDesc');
            $table->string('ReceiveLang');
            $table->string('ReceivePay');
            $table->string('ReceiveAmount');
            $table->string('ReceiveOptional');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('receives');
    }
}
