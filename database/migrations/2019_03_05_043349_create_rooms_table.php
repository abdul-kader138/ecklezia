<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRoomsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rooms', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedInteger('category_id');
            $table->string('short_name')->unique();
            $table->string('name')->nullable();
            $table->boolean('status')->default(1);
            $table->timestamps();
        });
        $room = new \App\Room();
        $room->category_id = 1;
        $room->short_name = 'A';
        $room->name = 'AA';
        $room->save();
        $room = new \App\Room();
        $room->category_id = 1;
        $room->short_name = 'B';
        $room->name = 'BB';
        $room->save();
        $room = new \App\Room();
        $room->category_id = 2;
        $room->short_name = 'C';
        $room->name = 'CC';
        $room->save();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rooms');
    }
}
