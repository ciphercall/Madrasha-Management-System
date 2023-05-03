<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePadcollectionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('padcollections', function (Blueprint $table) {
            $table->bigIncrements('padcollection_id')->primary;
            $table->integer('brunch_id');
            $table->string('brunch_name');
            $table->date('date');
            $table->string('page_no');
            $table->string('pad_collection');
            $table->string('provider');
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
        Schema::dropIfExists('padcollections');
    }
}
