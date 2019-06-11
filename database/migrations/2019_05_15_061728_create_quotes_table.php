<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQuotesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('quotes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('quote_number');
            $table->string('name');
            $table->string('quote_date');
            $table->string('due_date');
            $table->string('prefix');
            $table->float('sub',25,2)->nullable();
            $table->float('tax_total',25,2)->nullable();
            $table->string('discount_type')->nullable();
            $table->float('discount_amount',25,2)->nullable();
            $table->float('discount_figure',25,2)->nullable();
            $table->float('grand_total',25,2)->nullable();
            $table->text('quote_note')->nullable();
            $table->integer('status')->nullable()->default('0');
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
        Schema::dropIfExists('quotes');
    }
}
