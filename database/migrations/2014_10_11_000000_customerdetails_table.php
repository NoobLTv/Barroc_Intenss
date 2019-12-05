<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CustomerdetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customer_details', function (Blueprint $table) {
           $table->bigIncrements('id');
           $table->string('contactperson_name');
           $table->string('contactperson_email');
           $table->string('contactperson_number');
           $table->string('companyname');
           $table->string('companyemail');
           $table->string('companynumber');
           $table->string('adres');
           $table->string('postalcode');
           $table->string('city');
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
        Schema::dropIfExists('customerdetails');
    }
}
