<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('todos', function (Blueprint $table) {
            // To make all ids are unique
            $table->increments('id');
            // This to make sortable function works
            $table->bigInteger('no')->nullable();
            // To add the name of the list
            $table->string('name')->nullable();
            // To add the description of the list
            $table->text('description')->nullable();
            // To determine the status of the list
            $table->integer('status')->default(0);
            // To retrieve back the deleted data
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
        Schema::dropIfExists('todos');
    }
};
