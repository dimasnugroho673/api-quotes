<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateParticipantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('participants', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('name_participant');
            $table->string('type', 255);
            // $table->string('as', 128);
            // $table->char('event_id', 36);
            $table->bigInteger('date_start');
            $table->bigInteger('date_end');
            $table->integer('sorted')->nullable();
            $table->integer('month')->nullable();
            $table->integer('year')->nullable();
            $table->string('code_certificate', 255)->nullable();

            $table->timestamps();

            // $table->foreign('event_id')->references('id')->on('events')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('participants');
    }
}
