<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateElectionCommissionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('election_commissions', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('designation')->nullable();
            $table->string('office')->nullable();
            $table->unsignedBigInteger('year_id')->unsigned();
            $table->foreign('year_id')->references('id')->on('years');
            $table->string('photo')->nullable();
            $table->enum('ec_role', ['CHIEF_ELECTION_COMMISSIONER', 'ELECTION_COMMISSIONER'])->default('ELECTION_COMMISSIONER');

            $table->enum('status', ['INACTIVE', 'ACTIVE'])->default('ACTIVE');
            $table->string('priority')->default(10);
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
        Schema::dropIfExists('election_commissions');
    }
}
