<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAocapprovedTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('aocapproved', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('aocapproved_id')->unique();
            $table->timestamps();

            $table->foreign('aocapproved_id')->references('id')->on('ocapproved')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('=users');
    }
}
