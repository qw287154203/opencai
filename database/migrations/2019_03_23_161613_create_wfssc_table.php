<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWfsscTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('wfssc', function (Blueprint $table) {
            $table->increments('id');
            $table->char('turnNum',20);
            $table->integer('turn')->default('0');
            $table->timestamp('openTime');
            $table->char('num1',2);
            $table->char('num2',2);
            $table->char('num3',2);
            $table->char('num4',2);
            $table->char('num5',2);
            $table->integer('sum')->unsigned();
            $table->char('dx',1);
            $table->char('ds',1);
            $table->char('lh1',1);
            $table->integer('clnum1')->unsigned()->default('0');
            $table->integer('clnum2')->unsigned()->default('0');
            $table->integer('clnum3')->unsigned()->default('0');
            $table->integer('clnum4')->unsigned()->default('0');
            $table->integer('clnum5')->unsigned()->default('0');
            $table->integer('clsum')->unsigned()->default('0');
            $table->integer('cldx')->unsigned()->default('0');
            $table->integer('clds')->unsigned()->default('0');
            $table->integer('cllh1')->unsigned()->default('0');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('wfssc');
    }
}
