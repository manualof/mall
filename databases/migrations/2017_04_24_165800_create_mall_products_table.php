<?php
/**
 * This file is part of Notadd.
 *
 * @datetime 2017-04-24 17:45:06
 */

use Illuminate\Database\Schema\Blueprint;
use Notadd\Foundation\Database\Migrations\Migration;

/**
 * Class CreateMallProductsTable.
 */
class CreateMallProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $this->schema->create('mall_products', function (Blueprint $table) {
            $table->increments('id');
            $table->string('barcode')->nullable();
            $table->integer('brand_id')->default();
            $table->integer('category_id')->default(0);
            $table->string('description')->nullable();
            $table->string('name');
            $table->string('weight')->nullable();
            $table->string('size');
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
        $this->schema->drop('mall_products');
    }
}
