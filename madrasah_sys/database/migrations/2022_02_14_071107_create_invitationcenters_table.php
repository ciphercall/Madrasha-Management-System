<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInvitationcentersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('invitationcenters', function (Blueprint $table) {
            $table->bigIncrements('invitationcenter_id')->primary;
            $table->integer('brunch_id');
            $table->string('brunch_name');
            $table->date('date');
            $table->string('tahlil');
            $table->string('doa_yunus');
            $table->string('darude_saifillah');
            $table->string('darude_nariya');
            $table->string('quran_katom');
            $table->string('occasion');
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
        Schema::dropIfExists('invitationcenters');
    }
}
