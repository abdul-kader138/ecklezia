<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMinistriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ministries', function (Blueprint $table) {
            $table->increments('id');
            $table->string('ministry');
            $table->string('ministry_name');
            $table->string('image')->nullable();
            $table->enum('ministry_status',['leader','member','other']);
            $table->string('others_text')->nullable();
            $table->string('phone')->nullable();
            $table->string('meeting_time')->nullable();
            $table->string('events');
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
        Schema::dropIfExists('ministries');
    }
}
