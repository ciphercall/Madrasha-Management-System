<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInvitationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('invitations', function (Blueprint $table) {
            $table->bigIncrements('invitation_id')->primary;
            $table->integer('brunch_id');
            $table->string('brunch_name');
            $table->integer('studid');
            $table->date('date');
            $table->string('name');
            $table->string('email');
            $table->string('phone');
            $table->integer('amount');
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
        Schema::dropIfExists('invitations');
    }
}
