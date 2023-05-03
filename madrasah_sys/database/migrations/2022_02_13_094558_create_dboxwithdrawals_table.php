<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDboxwithdrawalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dboxwithdrawals', function (Blueprint $table) {
            $table->bigIncrements('dboxwithdrawal_id')->primary;
            $table->integer('brunch_id');
            $table->string('brunch_name');
            $table->date('withdrawal_date');
            $table->string('receiver_name');
            $table->string('receipt_no');
            $table->string('address');
            $table->string('received_amount');
            $table->string('box_no');
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
        Schema::dropIfExists('dboxwithdrawals');
    }
}
