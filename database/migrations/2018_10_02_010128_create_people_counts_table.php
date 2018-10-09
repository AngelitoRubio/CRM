<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePeopleCountsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('people_counts', function (Blueprint $table) {
            $table->increments('id');
            $table->string('company_code');
            $table->string('branch_code');
            $table->date('date');
            $table->integer('count');
            $table->string('stime');
            $table->string('etime');
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
        Schema::dropIfExists('people_counts');
    }
}
