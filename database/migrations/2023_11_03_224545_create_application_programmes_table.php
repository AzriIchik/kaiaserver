<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('application_programmes', function (Blueprint $table) {
            $table->string('app_prog_id', 10)->primary();
            $table->bigInteger('application_id')->unsigned();
            $table->string('cp_id', 10);
            $table->foreign('application_id')->references('application_id')->on('applications');
            $table->foreign('cp_id')->references('cp_id')->on('campus_programmes');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('application_programmes');
    }
};
