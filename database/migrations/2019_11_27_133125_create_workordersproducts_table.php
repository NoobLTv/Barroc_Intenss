<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWorkordersproductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('workordersproduct', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('workorder_id');
            $table->unsignedBigInteger('supply_id');
            $table->integer('amount');
            $table->timestamps();

            $table->foreign('workorder_id')
                ->references('id')
                ->on('work_orders');

            $table->foreign('supply_id')
                ->references('id')
                ->on('supplies');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('workordersproduct');
    }
}
