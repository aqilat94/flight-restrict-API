<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDonatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('donates', function (Blueprint $table) {
            $table->increments('id');
            $table->uuid('uuid')->nullable();
            $table->string('name');
            $table->string('email');
            $table->string('phone')->nullable();
            $table->integer('amount');
            $table->boolean('payment_status')->default(false);
            $table->string('toyyibPay_bill_code')->nullable();
            $table->timestamps();

            // $table->unsignedInteger('user_id')->nullable();
            // $table->foreign('user_id')->references('id')->on('users');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('donates');
    }
}
