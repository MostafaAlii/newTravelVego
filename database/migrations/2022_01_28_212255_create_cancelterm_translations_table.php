<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCanceltermTranslationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cancelterm_translations', function (Blueprint $table) {
            $table->unsignedBigInteger('cancelterm_id');
            $table->string('locale')->index();
            $table->text('name');
            $table->unique(['cancelterm_id', 'locale']);
            $table->foreign('cancelterm_id')->references('id')->on('cancelterms')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cancelterm_translations');
    }
}
