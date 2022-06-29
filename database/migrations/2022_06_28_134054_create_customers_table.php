<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->id();
            $table->string('First_Name');
            $table->string('Second_Name');
            $table->string('Third_Name');
            $table->string('Last_Name');
            $table->string('Email_Address');
            $table->integer('Phone');
            $table->string('Address');
            $table->string('City');
            $table->integer('IDNumber');
            $table->string('IDCardCopy')->nullable();
            $table->date('BirthDate');
            $table->string('gender');
            $table->string('Flight');
            $table->string('Country');
            $table->date('Check_In');
            $table->date('Check_out');
            $table->integer('Adults');
            $table->integer('Childrens');
            $table->string('Hotel_rating');
            // 'holdername', 'cardno', 'expmonth', 'expyear']; cvcpwd
            $table->string('holdername');
            $table->integer('cardno');
            $table->integer('cvcpwd');
            $table->string('expmonth');
            $table->string('expyear');
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
        Schema::dropIfExists('customers');
    }
}
