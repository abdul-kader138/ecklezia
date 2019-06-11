<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSermonplannersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sermonplanners', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->string('purpose')->nullable();
            $table->string('opening_scripture')->nullable();
            $table->string('created_date')->nullable();
            $table->string('preaching_date')->nullable();
            $table->string('main_scripture')->nullable();
            $table->text('sermon')->nullable();
            $table->text('conclusion')->nullable();
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
        Schema::dropIfExists('sermonplanners');
    }
}
