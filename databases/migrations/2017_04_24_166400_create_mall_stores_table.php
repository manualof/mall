<?php
/**
 * This file is part of Notadd.
 *
 * @datetime 2017-05-09 13:53:52
 */

use Illuminate\Database\Schema\Blueprint;
use Notadd\Foundation\Database\Migrations\Migration;

/**
 * Class CreateMallStoresTable.
 */
class CreateMallStoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $this->schema->create('mall_stores', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('category_id')->default(0);
            $table->string('address')->nullable();
            $table->string('avatar')->nullable();
            $table->string('company')->nullable();
            $table->timestamp('end_at')->nullable();
            $table->string('identification');
            $table->tinyInteger('level')->default(0);
            $table->string('location')->nullable();
            $table->string('logo')->nullable();
            $table->string('name');
            $table->timestamp('open_at')->nullable();
            $table->enum('status', ['review', 'opening', 'closed', 'banned'])->default('review');
            $table->string('flow_marketing')->nullable();
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
        $this->schema->drop('mall_stores');
    }
}
