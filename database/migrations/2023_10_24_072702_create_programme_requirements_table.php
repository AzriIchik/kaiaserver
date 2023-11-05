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
        Schema::create('programme_requirements', function (Blueprint $table) {
            $table->string('id', 9)->primary();
            $table->bigInteger('gred_id')->unsigned();
            $table->integer('subject_id')->unsigned();
            $table->string('programme_code');
            $table->boolean('special_req')->default(false);
            $table->foreign('gred_id')->references('id')->on('greds')->onDelete('cascade');
            $table->foreign('subject_id')->references('id')->on('subjects')->onDelete('cascade');
            $table->foreign('programme_code')->references('code')->on('programmes')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('programme_requirements');
    }
};
