<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCandidatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('candidates', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('designation')->nullable();
            $table->unsignedBigInteger('seat_id')->unsigned();
            $table->foreign('seat_id')->references('id')->on('seats');
//                ->onUpdate('cascade')->onDelete('cascade');
            $table->unsignedBigInteger('year_id')->unsigned();
            $table->foreign('year_id')->references('id')->on('years');
            $table->unsignedInteger('number_of_votes')->default('0');
            $table->string('status')->nullable();
            $table->softDeletes();
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
        Schema::dropIfExists('candidates');
    }
}
