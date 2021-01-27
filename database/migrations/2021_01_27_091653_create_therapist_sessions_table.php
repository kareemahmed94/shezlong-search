<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTherapistSessionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('therapist_sessions', function (Blueprint $table) {
            $table->id();
            $table->string('price');
            $table->string('duration');
            $table->unsignedBigInteger('therapist_id');
            $table->timestamps();

            $table->foreign('therapist_id')->references('id')->on('therapists')->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('therapist_sessions');
    }
}
