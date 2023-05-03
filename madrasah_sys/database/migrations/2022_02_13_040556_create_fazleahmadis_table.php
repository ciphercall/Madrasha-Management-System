<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFazleahmadisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fazleahmadis', function (Blueprint $table) {
            $table->bigIncrements('fazleahmadi_id')->primary;
            $table->integer('member_id');
            $table->string('member_name');
            $table->string('phone');
            $table->integer('brunch_id');
            $table->string('brunch_name');
            $table->string('member_category');
            $table->string('designation');
            $table->date('date');
            $table->integer('edition_no_to');
            $table->integer('edition_no_from');
            $table->integer('received_amount');
            $table->integer('money_receipt_no');
            $table->integer('edition_delivery');
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
        Schema::dropIfExists('fazleahmadis');
    }
}
