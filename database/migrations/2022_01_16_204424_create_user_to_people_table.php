<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserToPeopleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_to_people', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->nullable(false)->references('id')->on('users')->onDelete('cascade');
            $table->foreignId('person_id')->nullable(false)->references('id')->on('people')->onDelete('cascade');
            $table->tinyInteger('active')->default(1);
            $table->date('start_date');
            $table->date('end_date');
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
        Schema::dropIfExists('user_to_people');
    }
}
