<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePeoplesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('peoples', function (Blueprint $table) {
            $table->increments('id');
            $table->string('file')->nullable();
            $table->integer('family_member_id')->nullable();
            $table->enum('family_status',['household_head','spouse','child'])->nullable();
            $table->string('first_name');
            $table->string('last_name')->nullable();
            $table->string('email')->nullable();
            $table->enum('member_category',['church_member','visitor','volunteer']);
            $table->string('cell_number')->nullable();
            $table->string('home_phone_number')->nullable();
            $table->enum('people_category',[1,2,3,4,5,6,7]);
            $table->string('user_name');
            $table->string('password');
            $table->enum('gender',['M','F'])->default('M');
            $table->enum('household_status',['single','married','divorced','engaged']);
            $table->boolean('same_as_address')->default(1);
            $table->string('dob')->nullable();
            $table->string('baptized_date')->nullable();
            $table->enum('baptized',['no_baptized','sprinkling','immersion'])->nullable();
            $table->string('membership_unique_id')->unique();
            $table->unsignedInteger('admin_access')->nullable()->default(NULL);
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
        Schema::dropIfExists('peoples');
    }
}
