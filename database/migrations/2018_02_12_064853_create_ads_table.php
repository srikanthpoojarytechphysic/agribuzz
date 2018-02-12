<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ads', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('ad_title')->nullable();
            $table->string('name')->nullable();
            $table->string('date')->nullable();
            $table->string('city')->nullable();
            $table->string('state')->nullable();
            $table->string('contact')->nullable();
            $table->string('email')->nullable();
            $table->integer('comments')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ads');
    }
}
