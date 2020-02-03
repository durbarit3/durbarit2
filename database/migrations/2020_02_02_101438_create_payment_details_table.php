<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaymentDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payment_details', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('card_id');
            $table->unsignedBigInteger('order_place_id')->nullable();
            $table->string('address_zip');
            $table->string('address_zip_check')->default('pass');
            $table->string('card_brand');
            $table->string('expire_month');
            $table->string('expire_year');
            $table->string('last_four_digits');
            $table->timestamps();
            $table->foreign('order_place_id')->references('id')->on('order_places')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('payment_details');
    }
}
