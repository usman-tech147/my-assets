<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductSizesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_size', function (Blueprint $table) {
            $table->id();
            $table->foreignId('product_fk_id')->constrained('products')->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreignId('size_fk_id')->constrained('sizes')->cascadeOnDelete()->cascadeOnUpdate();
            $table->integer('in_stock')->default(0);

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
        Schema::dropIfExists('product_sizes');
    }
}
