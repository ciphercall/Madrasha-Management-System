<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBrunchesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('brunches', function (Blueprint $table) {
            $table->bigIncrements('brunch_id')->primary;
            $table->integer('brunch_code');
            $table->string('brunch_name');
            $table->string('phone');
            $table->string('email');
            $table->string('address');
            $table->string('brunch_head');
            $table->string('designation');
            $table->string('bg');
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
        Schema::dropIfExists('brunches');
    }
}
