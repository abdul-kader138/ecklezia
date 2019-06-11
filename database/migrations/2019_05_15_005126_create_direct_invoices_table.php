<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDirectInvoicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('direct_invoices', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('invoice_number');
            $table->string('customer_name');
            $table->string('customer_email');
            $table->string('invoice_date');
            $table->string('due_date');
            $table->string('prefix');
            $table->float('sub',25,2)->nullable();
            $table->float('tax_total',25,2)->nullable();
            $table->string('discount_type')->nullable();
            $table->float('discount_amount',25,2)->nullable();
            $table->float('discount_figure',25,2)->nullable();
            $table->float('grand_total',25,2)->nullable();
            $table->text('invoice_note')->nullable();
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
        Schema::dropIfExists('direct_invoices');
    }
}
