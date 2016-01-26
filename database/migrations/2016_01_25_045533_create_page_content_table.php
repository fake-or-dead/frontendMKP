<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePageContentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('page_content', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->integer('location_id')->unsigned()->index()->comment = 'Foreign key of table location';
            $table->integer('user_id')->unsigned()->index()->comment = 'Foreign key of table user';
            $table->string('name', 255);
            $table->string('link_url', 255);
            $table->string('image_url', 255);
            $table->integer('sort_order')->comment = 'order for display on frontend';
            $table->date('start');
            $table->date('end');
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
        Schema::drop('page_content');
    }
}
