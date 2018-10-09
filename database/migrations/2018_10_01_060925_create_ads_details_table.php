<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdsDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ads_details', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('ads_id');
            $table->integer('ads_type_id');
            $table->string('ads_month');
            $table->string('description');
            $table->string('target_sex');
            $table->string('target_age');
            $table->string('target_date');
            $table->string('product_name')->nullable();
            $table->string('price_point')->nullable();
            $table->string('area')->nullable();
            $table->text('product_info')->nullable();
            $table->string('color')->nullable();
            $table->string('material')->nullable();
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
        Schema::dropIfExists('ads_details');
    }
}
