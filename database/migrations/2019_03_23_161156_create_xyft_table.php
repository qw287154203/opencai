<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateXyftTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('xyft', function (Blueprint $table) {
            $table->increments('id');
            $table->char('turnNum',20);
            $table->integer('turn')->default('0');
            $table->timestamp('openTime');
            $table->char('num1',2);
            $table->char('num2',2);
            $table->char('num3',2);
            $table->char('num4',2);
            $table->char('num5',2);
            $table->char('num6',2);
            $table->char('num7',2);
            $table->char('num8',2);
            $table->char('num9',2);
            $table->char('num10',2);
            $table->integer('sum')->unsigned();
            $table->char('dx',1);
            $table->char('ds',1);
            $table->char('lh1',1);
            $table->char('lh2',1);
            $table->char('lh3',1);
            $table->char('lh4',1);
            $table->char('lh5',1);
            $table->integer('clnum1')->unsigned()->default('0');
            $table->integer('clnum2')->unsigned()->default('0');
            $table->integer('clnum3')->unsigned()->default('0');
            $table->integer('clnum4')->unsigned()->default('0');
            $table->integer('clnum5')->unsigned()->default('0');
            $table->integer('clnum6')->unsigned()->default('0');
            $table->integer('clnum7')->unsigned()->default('0');
            $table->integer('clnum8')->unsigned()->default('0');
            $table->integer('clnum9')->unsigned()->default('0');
            $table->integer('clnum10')->unsigned()->default('0');
            $table->integer('clsum')->unsigned()->default('0');
            $table->integer('cldx')->unsigned()->default('0');
            $table->integer('clds')->unsigned()->default('0');
            $table->integer('cllh1')->unsigned()->default('0');
            $table->integer('cllh2')->unsigned()->default('0');
            $table->integer('cllh3')->unsigned()->default('0');
            $table->integer('cllh4')->unsigned()->default('0');
            $table->integer('cllh5')->unsigned()->default('0');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('xyft');
    }
}
