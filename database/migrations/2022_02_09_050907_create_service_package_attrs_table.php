<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServicePackageAttrsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('service_package_attrs', function (Blueprint $table) {
            $table->id();
            $table->integer('service_package_id')->unsigned();
            $table->string('plan_name');
            $table->bigInteger('price');
            $table->timestamps();

            // $table->foreign('package_id')->references('id')->on('service_packages');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('service_package_attrs');
    }
}
