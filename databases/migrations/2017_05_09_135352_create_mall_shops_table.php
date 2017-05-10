<?php
/**
 * This file is part of Notadd.
 *
 * @datetime 2017-05-09 13:53:52
 */

use Illuminate\Database\Schema\Blueprint;
use Notadd\Foundation\Database\Migrations\Migration;

/**
 * Class CreateMallShopsTable.
 */
class CreateMallShopsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $this->schema->create('mall_shops', function (Blueprint $table) {
            $table->increments('id');
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
        $this->schema->drop('mall_shops');
    }
}
