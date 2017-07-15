<?php
/**
 * This file is part of Notadd.
 *
 * @datetime 2017-07-15 18:51:38
 */
use Illuminate\Database\Schema\Blueprint;
use Notadd\Foundation\Database\Migrations\Migration;

/**
 * Class CreateMallStoreGradesTable.
 */
class CreateMallStoreGradesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $this->schema->create('mall_store_grades', function (Blueprint $table) {
            $table->increments('id');
            $table->tinyInteger('level')->default(0)->comment('店铺级别');
            $table->string('name')->comment('等级名称');
            $table->tinyInteger('picture_limit')->default(0)->comment('可上传图片数');
            $table->tinyInteger('product_limit')->default(0)->comment('可发布商品数');
            $table->decimal('price', 12, 2)->default(0)->comment('收费标准');
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
        $this->schema->drop('mall_store_grades');
    }
}
