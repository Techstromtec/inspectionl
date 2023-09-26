<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
{
    Schema::create('valuations2', function (Blueprint $table) {
        $table->id();
        $table->string('vehicle_type');
        $table->string('manufacture_ym');
        $table->string('make');
        $table->string('model');
        $table->string('variant');
        $table->string('location');
        $table->string('cabin');
        $table->integer('hrs_used');
        $table->string('fuel_type');
        $table->string('vehicle_regi_number');
        $table->string('vehi_regi_year');
        $table->integer('no_of_owners');
        $table->string('owner_name');
        $table->string('engine_cc');
        $table->string('chassis_number');
        $table->string('engine_number');
        $table->text('accident');
        $table->text('major_issues');
        $table->string('inspection_location');
        $table->text('vehicle_summery');
        $table->timestamps();
    });
}

public function down()
{
    Schema::dropIfExists('valuations2');
}
};
