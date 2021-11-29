<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTopicsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('topics', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('subcategory_id');
            $table->string('title');
            $table->text('description');
            $table->longText('html')->nullable()->default('N/A');
            $table->longText('css')->nullable()->default('N/A');
            $table->longText('jquery')->nullable()->default('N/A');
            $table->longText('laravel')->nullable()->default('N/A');
            $table->text('raw_sql')->nullable()->default('N/A');
            $table->text('eloquent')->nullable()->default('N/A');
            $table->text('query_builder')->nullable()->default('N/A');
            $table->tinyInteger('view_status')->nullable()->default(0);

            $table->foreign('subcategory_id')
                ->references('id')
                ->on('subcategories')
                ->onDelete('cascade')
                ->onUpdate('cascade');

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
        Schema::dropIfExists('topics');
    }
}
