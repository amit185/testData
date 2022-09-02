<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLandmarksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('landmarks', function (Blueprint $table) {
            $table->id();
            $table->string('landmark_name')->nullable();
            $table->string('landmark_tag')->nullable();
            $table->string('landmark_content')->nullable();
            $table->string('landmark_location')->nullable();
            $table->string('landmark_ticket_available')->nullable();
            $table->string('landmark_ticket_discount')->nullable();
            $table->string('landmark_ticket_price')->nullable();
            $table->string('landmark_events')->nullable(); 
            $table->softDeletes(); 
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
        Schema::dropIfExists('landmarks');
    }
}
