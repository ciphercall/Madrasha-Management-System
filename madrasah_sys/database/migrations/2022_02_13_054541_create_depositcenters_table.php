<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDepositcentersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('depositcenters', function (Blueprint $table) {
            $table->bigIncrements('depositcenter_id')->primary;
            $table->integer('brunch_id');
            $table->string('brunch_name');
            $table->date('collection_date');
            $table->string('member_name');
            $table->string('phone');
            $table->integer('received_amount');
            $table->string('purpose_catagory');
            $table->string('receiver_name');
            $table->integer('money_receipt_no');
            $table->string('acknowledgment_receipt');
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
        Schema::dropIfExists('depositcenters');
    }
}
