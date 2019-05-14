<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Schema;

class CreateProductablesTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create(Config::get('amethyst.product.data.productable.table'), function (Blueprint $table) {
            $table->increments('id');
            $table->integer('origin_id')->unsigned()->nullable();
            $table->foreign('origin_id')->references('id')->on(Config::get('amethyst.product.data.product.table'));
            $table->integer('product_id')->unsigned()->nullable();
            $table->foreign('product_id')->references('id')->on(Config::get('amethyst.product.data.product.table'));
            $table->string('key')->nullable();
            $table->float('quantity')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists(Config::get('amethyst.product.data.productable.table'));
    }
}
