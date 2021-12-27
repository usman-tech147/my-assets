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
            $table->id();
            $table->unsignedBigInteger('subcategory_fk_id');
            $table->unsignedBigInteger('quality_fk_id')->nullable();
            $table->unsignedBigInteger('fabric_fk_id')->nullable();
            $table->string('name');
            $table->longText('description')->nullable();
            $table->double('price');
            $table->boolean('status');
            $table->string('image')->nullable();
            $table->date('sale_date_before')
                ->nullable();

            $table->foreign('subcategory_fk_id')
                ->references('id')
                ->on('product-subcategories');
            $table->foreign('quality_fk_id')
                ->references('id')
                ->on('qualities');
            $table->foreign('fabric_fk_id')
                ->references('id')
                ->on('fabrics');
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
