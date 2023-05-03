<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePadusagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('padusages', function (Blueprint $table) {
            $table->bigIncrements('padusage_id')->primary;
            $table->integer('brunch_id');
            $table->string('brunch_name');
            $table->date('date');
            $table->string('padused_des');
            $table->string('padused_page');
            $table->string('stock');
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
        Schema::dropIfExists('padusages');
    }
}
