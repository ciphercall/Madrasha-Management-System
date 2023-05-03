<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCentralmembersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('centralmembers', function (Blueprint $table) {
            $table->bigIncrements('id')->primary;
            $table->string('name');
            $table->string('phone');
            $table->string('email');
            $table->date('date_birth');
            $table->string('father');
            $table->string('mother');
            $table->integer('family_member');
            $table->string('blood_group');
            $table->string('gender');
            $table->string('eduction_type');
            $table->string('education_skill');
            $table->string('occupation');
            $table->string('workplace');
            $table->string('country');

            $table->string('presentadd');
            $table->string('parmanentadd');
            $table->string('workplace_address');
            $table->string('relationship');
            $table->integer('nid');
            $table->string('image')->nullable();
            $table->date('torikot_date');
            $table->string('sobok_type');
            $table->integer('brunch_id');
            $table->string('brunch_name');
            $table->date('baiyat_date');
            $table->integer('donation_box_id');
            $table->string('occasion');
            $table->string('duty');
            $table->string('designation');

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
        Schema::dropIfExists('centralmembers');
    }
}
