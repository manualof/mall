<?php
/**
 * This file is part of Notadd.
 *
 * @datetime 2017-04-24 17:11:52
 */
use Illuminate\Database\Schema\Blueprint;
use Notadd\Foundation\Database\Migrations\Migration;

/**
 * Class CreateMallCategoriesTable.
 */
class CreateMallProductCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $this->schema->create('mall_product_categories', function (Blueprint $table) {
            $table->increments('id');
            $table->tinyInteger('commission')->default(0);
            $table->tinyInteger('commission_inherit')->default(0);
            $table->string('identification');
            $table->string('name');
            $table->integer('parent_id')->default(0);
            $table->tinyInteger('order')->default(0);
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
        $this->schema->drop('mall_product_categories');
    }
}
