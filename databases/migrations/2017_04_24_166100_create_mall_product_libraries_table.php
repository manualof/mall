<?php
/**
 * This file is part of Notadd.
 *
 * @datetime 2017-07-12 11:09:01
 */
use Illuminate\Database\Schema\Blueprint;
use Notadd\Foundation\Database\Migrations\Migration;

/**
 * Class CreateMallProductLibrariesTable.
 */
class CreateMallProductLibrariesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $this->schema->create('mall_product_libraries', function (Blueprint $table) {
            $table->increments('id');
            $table->string('barcode')->nullable()->comment('商品条形码');
            $table->integer('brand_id')->nullable()->comment('品牌 ID');
            $table->integer('business_item')->nullable()->comment('商家货号');
            $table->integer('category_id')->default(0)->comment('分类 ID');
            $table->text('description')->nullable()->comment('商品描述');
            $table->string('name')->comment('商品名称');
            $table->decimal('price', 12, 2)->deault('0.00')->comment('价格');
            $table->string('price_cost')->deault('0.00')->comment('成本价格');
            $table->string('price_market')->deault('0.00')->comment('市场价格');
            $table->integer('inventory')->defualt(0)->comment('库存');
            $table->integer('inventory_warning')->defualt(0)->comment('库存预警值');
            $table->string('flow_marketing')->nullable();
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
        $this->schema->drop('mall_product_libraries');
    }
}
