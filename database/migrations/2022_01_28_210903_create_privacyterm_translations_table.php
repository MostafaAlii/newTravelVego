<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePrivacytermTranslationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('privacyterm_translations', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('privacyterm_id');
            $table->string('locale')->index();
            $table->text('name');
            $table->unique(['privacyterm_id', 'locale']);
            $table->foreign('privacyterm_id')->references('id')->on('privacyterms')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('privacyterm_translations');
    }
}
