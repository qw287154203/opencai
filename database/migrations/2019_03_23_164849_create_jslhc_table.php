<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJslhcTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jslhc', function (Blueprint $table) {
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
            $table->integer('sum')->unsigned();
            $table->char('sdx',1);
            $table->char('sds',1);
            $table->char('sb',2);
            $table->char('tdx',1);
            $table->char('tds',1);
            $table->integer('clnum1')->unsigned()->default('0');
            $table->integer('clnum2')->unsigned()->default('0');
            $table->integer('clnum3')->unsigned()->default('0');
            $table->integer('clnum4')->unsigned()->default('0');
            $table->integer('clnum5')->unsigned()->default('0');
            $table->integer('clnum6')->unsigned()->default('0');
            $table->integer('clnum7')->unsigned()->default('0');
            $table->integer('clsum')->unsigned()->default('0');
            $table->integer('clsdx')->unsigned()->default('0');
            $table->integer('clsds')->unsigned()->default('0');
            $table->integer('clsb')->unsigned()->default('0');
            $table->integer('cltdx')->unsigned()->default('0');
            $table->integer('cltds')->unsigned()->default('0');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('jslhc');
    }
}
