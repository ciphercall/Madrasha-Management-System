<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMahfilsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mahfils', function (Blueprint $table) {
            $table->bigIncrements('mahfil_id')->primary;
            $table->integer('brunch_id');
            $table->string('brunch_name');
            $table->date('start_date');
            $table->date('end_date');
            $table->time('start_time');
            $table->time('end_time');
            $table->integer('num_speakers');
            $table->string('speakers');
            $table->string('occasion');
            $table->longText('address');
            $table->string('num_audience');
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
        Schema::dropIfExists('mahfils');
    }
}
