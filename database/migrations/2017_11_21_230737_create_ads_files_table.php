<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdsFilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ads_files', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('ads_id')->unsigned();
            $table->integer('files_id')->unsigned();
        });

        Schema::table('ads_files', function(Blueprint $table)
        {
            $table->foreign('ads_id')->references('id')->on('ads')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('files_id')->references('id')->on('files')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('ads_files', function(Blueprint $table)
        {
            $table->dropForeign('ads_files_ads_id_foreign');
            $table->dropForeign('ads_files_files_id_foreign');
        });

        Schema::dropIfExists('ads_files');
    }
}
