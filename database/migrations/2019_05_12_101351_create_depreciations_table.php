<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDepreciationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('depreciations', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('asset_name');
            $table->string('purchase_year');
            $table->float('cost',25,2);
            $table->integer('lifespan');
            $table->string('salvage_value',25,2);
            $table->text('description')->nullable();
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
        Schema::dropIfExists('depreciations');
    }
}
