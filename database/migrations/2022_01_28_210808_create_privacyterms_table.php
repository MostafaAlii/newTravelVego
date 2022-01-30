<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
class CreatePrivacytermsTable extends Migration
{
    public function up()
    {
        Schema::create('privacyterms', function (Blueprint $table) {
            $table->id();
            $table->text('name')->nullable();
            $table->string('created_by')->nullable();
            $table->string('updated_by')->nullable();
            $table->timestamps();
        });
    }
    public function down()
    {
        Schema::dropIfExists('privacyterms');
    }
}
