<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReceiveDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('receive_details', function (Blueprint $table) {
            $table->increments('no');
            $table->string('id');
            $table->string('psubid');
            $table->string('subjectid');
            $table->string('labid');
            $table->double('result');
            $table->timestamps();
            $table->softDeletes();
            // $table->primary(array('id', 'subjectid','psubid'));
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('receive_details');
    }
}
