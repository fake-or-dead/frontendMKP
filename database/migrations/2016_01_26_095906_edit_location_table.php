<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class EditLocationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('location', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->integer('user_id')->unsigned()->index()->comment = 'Foreign key of table user';
            $table->string('location_name', 255)->comment = 'Name of this location (Banner, Privilege, ...)';
            $table->integer('limit')->unsigned()->comment = 'not limit default 0';
            $table->integer('width')->comment = 'not limit default 0';
            $table->integer('height')->comment = 'not limit default 0';
            $table->integer('parent_id')->unsigned()->comment = 'not parent default 0';
            $table->integer('sort_order')->unsigned();
            $table->enum('types', ['Banner', 'Privilege', 'ClickChanel', 'ShopOfTheWeek'])->index();
            $table->tinyInteger('flag_last')->comment = 'for check this is last item 0 = not last, 1 = is last';
            $table->tinyInteger('status')->comment = '0 = disabled, 1 = active';
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
        //
    }
}
