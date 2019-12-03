<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLeasesuppliesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('leasesupplies', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('articlecode');
            $table->decimal('leaseprice');
            $table->decimal('installationcosts');
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
        Schema::dropIfExists('leasesupplies');
    }
}
