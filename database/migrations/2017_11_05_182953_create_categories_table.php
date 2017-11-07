<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('parent_id')->unsigned();
            $table->boolean('active')->default(1);
            $table->string('name',100);
            $table->string('url',100);
            $table->string('seo_title',255);
            $table->string('seo_desc',255);
            $table->string('seo_keywords',255);
            $table->timestamps();
        });

        Schema::table('categories', function(Blueprint $table)
        {
            $table->foreign('parent_id')->references('id')->on('categories')->onDelete('cascade')->onUpdate('cascade');
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
            $table->dropForeign('categories_parent_id_foreign');
        });
        Schema::dropIfExists('categories');
    }
}
