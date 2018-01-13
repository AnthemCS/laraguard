<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGuestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('guests', function (Blueprint $table) {
            $table->increments('id');
            $table->char("title", 10);
            $table->string("firstname");
            $table->string("lastname");
            $table->string("email")->unique();
            $table->string("contact_no");
            $table->string("fax_no");
            $table->string("addr_line_1");
            $table->string("addr_line_2");            
            $table->string("city");
            $table->string("postal_code");
            $table->string("country");
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
        Schema::dropIfExists('guests');
    }
}
