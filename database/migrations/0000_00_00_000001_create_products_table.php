<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create(Config::get('amethyst.product.data.product-type.table'), function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->unique();
            $table->string('code')->nullable()->unique();
            $table->text('description')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::create(Config::get('amethyst.product.data.product.table'), function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->unique();
            $table->string('code')->nullable()->unique();
            $table->text('description')->nullable();
            $table->integer('type_id')->unsigned()->nullable();
            $table->foreign('type_id')->references('id')->on(Config::get('amethyst.product.data.product-type.table'));
            $table->integer('supplier_id')->unsigned()->nullable();
            $table->foreign('supplier_id')->references('id')->on(Config::get('amethyst.supplier.data.supplier.table'));
            $table->integer('parent_id')->unsigned()->nullable();
            $table->foreign('parent_id')->references('id')->on(Config::get('amethyst.product.data.product.table'));
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::create(Config::get('amethyst.product.data.product-category.table'), function (Blueprint $table) {
            $table->integer('product_id')->unsigned();
            $table->foreign('product_id')->references('id')->on(Config::get('amethyst.product.data.product.table'))->onDelete('cascade');
            $table->integer('category_id')->unsigned();
            $table->foreign('category_id')->references('id')->on(Config::get('amethyst.category.data.category.table'))->onDelete('cascade');
            $table->unique(['product_id', 'category_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists(Config::get('amethyst.product.data.product-type.table'));
        Schema::dropIfExists(Config::get('amethyst.product.data.product.table'));
        Schema::dropIfExists(Config::get('amethyst.product.data.product-category.table'));
    }
}
