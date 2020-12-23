<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomFieldsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('custom_fields', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('page_code')->unsigned();
            $table->foreign('page_code')
                ->references('id')
                ->on('page_models')
                ->onDelete('cascade');
            $table->bigInteger('field_id')->unsigned();
            $table->foreign('field_id')
                ->references('id')
                ->on('fields')
                ->onDelete('cascade');
            $table->text('value');
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
        Schema::dropIfExists('custom_fields');
    }
}
