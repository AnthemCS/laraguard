<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReservationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reservations', function (Blueprint $table) {
            $table->increments('id');
            $table->integer("guest_id");
            $table->integer("room_id")->nullable();
            $table->integer("service_id")->nullable();
            $table->date("arrival_date");
            $table->date("departure_date");
            $table->integer('nights')->default(0);
            $table->integer("adults");
            $table->integer("children");
            $table->longText("comments");
            $table->integer("status_id")->nullable();
            $table->timestamps();
            $table->index(['guest_id','room_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reservations');
    }
}
