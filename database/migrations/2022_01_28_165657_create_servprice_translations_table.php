<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
class CreateServpriceTranslationsTable extends Migration {
    public function up() {
        Schema::create('servprice_translations', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('servprice_id');
            $table->string('locale')->index();
            $table->string('name');
            $table->unique(['servprice_id', 'locale']);
            $table->foreign('servprice_id')->references('id')->on('servprices')->onDelete('cascade');
        });
    }

    public function down() {
        Schema::dropIfExists('servprice_translations');
    }
}
