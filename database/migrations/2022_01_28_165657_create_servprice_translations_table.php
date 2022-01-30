<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServpriceTranslationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('servprice_translations', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedInteger('servprice_id');
            $table->string('locale')->index();
            $table->string('name');
            $table->unique(['servprice_id', 'locale']);
            $table->foreign('servprice_id')->references('id')->on('servprices')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('servprice_translations');
    }
}
