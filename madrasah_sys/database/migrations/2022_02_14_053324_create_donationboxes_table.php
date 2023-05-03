<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDonationboxesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('donationboxes', function (Blueprint $table) {
            $table->bigIncrements('donationbox_id')->primary;
            $table->integer('brunch_id');
            $table->string('brunch_name');
            $table->string('category');
            $table->date('date');
            $table->string('receiver_name');
            $table->string('address');
            $table->integer('box_no');
            $table->string('phone');
            $table->string('provider_name');
            $table->longText('comment');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('donationboxes');
    }
}
