<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
            $table->decimal('main_price', 18, 4)->unsigned()->nullable();
            $table->decimal('price_before_decs', 18, 4)->unsigned()->nullable();
            $table->integer('product_service_hourly')->nullable();
            $table->integer('product_viewed')->unsigned()->default(0);
            $table->boolean('vip')->default(0);
            $table->boolean('status')->nullable();
            $table->integer('supplier_id')->unsigned()->nullable();
            $table->foreign('supplier_id')->references('id')->on('suppliers')->onDelete('cascade');
            $table->softDeletes();
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
        Schema::dropIfExists('products');
    }
}
