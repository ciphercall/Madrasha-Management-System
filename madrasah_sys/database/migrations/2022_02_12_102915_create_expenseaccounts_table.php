<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExpenseaccountsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('expenseaccounts', function (Blueprint $table) {
            $table->bigIncrements('expenseaccount_id')->primary;
            $table->integer('brunch_id');
            $table->string('brunch_name');
            $table->date('date');
            $table->integer('receipt_no');
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
        Schema::dropIfExists('expenseaccounts');
    }
}
