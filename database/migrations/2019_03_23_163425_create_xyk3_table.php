<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateXyk3Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('xyk3', function (Blueprint $table) {
            $table->increments('id');
            $table->char('turnNum',20);
            $table->integer('turn')->default('0');
            $table->timestamp('openTime');
            $table->char('num1',2);
            $table->char('num2',2);
            $table->char('num3',2);
            $table->integer('sum')->unsigned();
            $table->char('dx',2);
            $table->char('ds',2);
            $table->integer('clnum1')->unsigned()->default('0');
            $table->integer('clnum2')->unsigned()->default('0');
            $table->integer('clnum3')->unsigned()->default('0');
            $table->integer('clsum')->unsigned()->default('0');
            $table->integer('cldx')->unsigned()->default('0');
            $table->integer('clds')->unsigned()->default('0');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('xyk3');
    }
}
