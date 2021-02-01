<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePartiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('parties', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('cover');
            $table->string('description');
            $table->date('date');
            $table->time('time');
            $table->string('location');
            $table->boolean('is_active')->default(1);
            $table->unsignedBigInteger('style_id')->nullable();
            $table->unsignedBigInteger('user_id')->default(0);
            $table->timestamps();
            
            $table->foreign('style_id')->references('id')->on('styles');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('parties');
    }
}
