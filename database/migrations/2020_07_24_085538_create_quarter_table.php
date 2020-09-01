<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQuarterTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('quarter', function (Blueprint $table) {
            $table->id();
            $table->string('address');
            $table->integer('building_number');
            $table->integer('flat_number');
            $table->string('previous_info');
            $table->string('status_of_house');
            $table->string('date');
            $table->string('rank');
            $table->string('phone_number');
            $table->string('house_type');
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
        Schema::dropIfExists('quarter');
    }
}
