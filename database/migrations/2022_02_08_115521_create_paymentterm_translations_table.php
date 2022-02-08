<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaymenttermTranslationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('paymentterm_translations', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('paymentterm_id');
            $table->string('locale')->index();
            $table->text('name');
            $table->unique(['paymentterm_id', 'locale']);
            $table->foreign('paymentterm_id')->references('id')->on('paymentterms')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('paymentterm_translations');
    }
}
