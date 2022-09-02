<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('events', function (Blueprint $table) {
            $table->id();
            $table->string('event_name')->nullable();
            $table->string('event_tag')->nullable();
            $table->string('event_content')->nullable();
            $table->string('event_location')->nullable();
            $table->string('event_date')->nullable();
            $table->string('event_ticket_available')->nullable();
            $table->string('event_ticket_discount')->nullable();
            $table->string('event_ticket_price')->nullable(); 
            $table->softDeletes(); 
            $table->timestamps();
        });
        Schema::table('companies', function (Blueprint $table) {
            $table->softDeletes(); 
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('events');
    }
}
