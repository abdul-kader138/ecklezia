<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContributionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contributions', function (Blueprint $table) {
            $table->increments('id');
            $table->string('contribution_id')->unique();
            $table->string('name');
            $table->enum('post_type',['posted','un_posted'])->default('posted');
            $table->string('date');
            $table->enum('giving_type',['tithes','offerings','tithes_&_offerings','pledge']);
            $table->string('financial_officer');
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
        Schema::dropIfExists('contributions');
    }
}
