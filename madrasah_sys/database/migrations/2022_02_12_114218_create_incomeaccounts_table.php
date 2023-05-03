<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIncomeaccountsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('incomeaccounts', function (Blueprint $table) {
            $table->bigIncrements('incomeaccount_id')->primary;
            $table->integer('brunch_id');
            $table->string('brunch_name');
            $table->date('date');
            $table->integer('money_receipt_no');
            $table->string('description');
            $table->integer('amount_money');
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
        Schema::dropIfExists('incomeaccounts');
    }
}
