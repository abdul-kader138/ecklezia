<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGivingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('givings', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedInteger('contribution_id');
            $table->unsignedInteger('contributor_id');
            $table->enum('giving_method',['cash','cheque','credit']);
            $table->float('amount');
            $table->string('account');
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
        Schema::dropIfExists('givings');
    }
}
