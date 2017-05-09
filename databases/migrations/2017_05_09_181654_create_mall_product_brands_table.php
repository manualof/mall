<?php
/**
 * This file is part of Notadd.
 *
 * @datetime 2017-05-09 18:16:54
 */

use Illuminate\Database\Schema\Blueprint;
use Notadd\Foundation\Database\Migrations\Migration;

/**
 * Class CreateMallProductBrandsTable.
 */
class CreateMallProductBrandsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $this->schema->create('mall_product_brands', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('category_id');
            $table->string('logo')->nullable();
            $table->string('name');
            $table->tinyInteger('order')->default(0);
            $table->tinyInteger('recommend')->default(0);
            $table->enum('show', ['image', 'text'])->default('text');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        $this->schema->drop('mall_product_brands');
    }
}
