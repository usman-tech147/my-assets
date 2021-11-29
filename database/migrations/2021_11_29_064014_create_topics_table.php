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
            $table->longText('html')->nullable();
            $table->longText('css')->nullable();
            $table->longText('jquery')->nullable();
            $table->longText('model')->nullable();
            $table->longText('controller')->nullable();
            $table->longText('app')->nullable();
            $table->longText('config')->nullable();
            $table->longText('migrations')->nullable();
            $table->longText('factories')->nullable();
            $table->longText('seed')->nullable();
            $table->longText('backend_extra')->nullable();

            $table->text('raw_sql')->nullable();
            $table->text('eloquent')->nullable();
            $table->text('query_builder')->nullable();
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
