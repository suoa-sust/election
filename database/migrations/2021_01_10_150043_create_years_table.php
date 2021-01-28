<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateYearsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('years', function (Blueprint $table) {
            $table->id();
            $table->string('name')->unique();
            $table->date('start')->nullable();
            $table->date('end')->nullable();
            $table->timestamp('election_date')->nullable();
            $table->enum('status',
                ['VOTE_FREEZE', 'COMPLETED', 'VOTE_DONE', 'VOTE_RUNNING', 'INACTIVE', 'ACTIVE']
            )->default('ACTIVE');
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
        Schema::dropIfExists('years');
    }
}
