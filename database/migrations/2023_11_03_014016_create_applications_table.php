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
        Schema::create('applications', function (Blueprint $table) {
            $table->id('application_id');
            $table->string('name');
            $table->string('icno', 12);
            $table->string('school_name');
            $table->dateTime('dob')->nullable();
            $table->string('address', 0);
            $table->string('mobilephoneno');
            $table->string('housephoneno')->nullable();
            $table->string('email');
            $table->string('religion')->nullable();
            $table->string('nationality')->nullable();
            $table->string('sex')->nullable();
            $table->longText('spmresult');
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
        Schema::dropIfExists('applications');
    }
};
