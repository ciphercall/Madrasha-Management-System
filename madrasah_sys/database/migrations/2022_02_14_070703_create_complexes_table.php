<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateComplexesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('complexes', function (Blueprint $table) {
            $table->bigIncrements('complex_id')->primary;
            $table->integer('brunch_id');
            $table->string('brunch_name');
            $table->date('withdrawal_date');
            $table->string('receiver_name');
            $table->integer('receipt_no');
            $table->string('address');
            $table->integer('received_amount');
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
        Schema::dropIfExists('complexes');
    }
}
