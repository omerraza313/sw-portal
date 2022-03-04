<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWorkerInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('worker_infos', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id')->unsigned();
            $table->string('profile_img');
            $table->string('education');
            $table->string('country');
            $table->string('state');
            $table->string('city');
            $table->string('town');
            $table->integer('zip_code');
            $table->string('personal_info');
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
        Schema::dropIfExists('worker_infos');
    }
}
