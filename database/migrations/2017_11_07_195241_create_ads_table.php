<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ads', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('categories_id')->unsigned();
            $table->integer('users_id')->unsigned();
            $table->string('title');
            $table->text('text');
            $table->timestamps();
        });

        Schema::table('ads', function(Blueprint $table)
        {
            $table->foreign('categories_id')->references('id')->on('categories')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('users_id')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('categories', function(Blueprint $table)
        {
            $table->dropForeign('ads_categories_id_foreign');
            $table->dropForeign('ads_users_id_foreign');
        });

        Schema::dropIfExists('ads');
    }
}
