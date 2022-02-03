<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
class CreateServpricesTable extends Migration {
    public function up() {
        Schema::create('servprices', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->nullable();
            $table->string('created_by')->nullable();
            $table->string('updated_by')->nullable();
            $table->boolean('status')->default(0);
            $table->softDeletes();
            $table->timestamps();
        });
    }

    public function down() {
        Schema::dropIfExists('servprices');
    }
}
