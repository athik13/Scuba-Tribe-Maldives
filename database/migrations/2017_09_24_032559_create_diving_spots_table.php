<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDivingSpotsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('diving_spots', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->nullable();
            $table->integer('star')->nullable();
            $table->longtext('description')->nullable();
            $table->string('owner_address')->nullable();
            $table->string('email')->nullable();
            $table->string('website')->nullable();
            $table->string('slug')->nullable();
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
        Schema::dropIfExists('diving_spots');
    }
}
