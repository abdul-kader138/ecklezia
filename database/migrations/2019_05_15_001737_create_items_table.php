<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('items', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('type');
            $table->integer('invoice_id');
            $table->string('item');
            $table->string('tax_type')->nullable();
            $table->float('tax_rate',25,2)->nullable();
            $table->integer('qty');
            $table->float('unit_price',25,2)->nullable();
            $table->float('sub_total',25,2)->nullable();
            $table->float('total',25,2)->nullable();
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
        Schema::dropIfExists('items');
    }
}
