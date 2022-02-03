<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
class CreateAttributesTable extends Migration
{
    public function up()
    {
        Schema::create('attributes', function (Blueprint $table) {
            $table->increments('id');
            //$table->string('name')->nullable();
            $table->unsignedInteger('servprice_id');
            $table->foreign('servprice_id')->references('id')->on('servprices')->onDelete('cascade');
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
        Schema::dropIfExists('attributes');
    }
}
