<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQurankhatamsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('qurankhatams', function (Blueprint $table) {
            $table->bigIncrements('qurankhatam_id')->primary;
            $table->integer('brunch_id');
            $table->string('brunch_name');
            $table->integer('studid');
            $table->date('date');
            $table->string('name');
            $table->string('email');
            $table->string('phone');
            $table->string('amount');
            $table->string('occasion');
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
        Schema::dropIfExists('qurankhatams');
    }
}
