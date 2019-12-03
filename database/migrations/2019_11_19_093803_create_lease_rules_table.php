<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLeaseRulesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lease_rules', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('lease_id');
            $table->unsignedBigInteger('leasesupplies_id');
            $table->integer('amount');
            $table->timestamps();

            $table->foreign('lease_id')
                ->references('id')
                ->on('leases');

            $table->foreign('leasesupplies_id')
                ->references('id')
                ->on('leasesupplies');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('lease_rules');
    }
}
