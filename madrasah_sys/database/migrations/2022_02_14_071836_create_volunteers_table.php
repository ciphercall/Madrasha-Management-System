<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVolunteersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('volunteers', function (Blueprint $table) {
            $table->bigIncrements('volunteer_id')->primary;
            $table->integer('brunch_id');
            $table->string('brunch_name');
            $table->integer('member_id');
            $table->string('member_name');
            $table->integer('phone');
            $table->string('occasion');
            $table->string('duty');
            $table->string('present_duty');
            $table->string('previous_duty');
            $table->date('duty_date');
            $table->string('place');
            $table->longText('comment');
            $table->softDeletes();
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
        Schema::dropIfExists('volunteers');
    }
}
