<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTbqrespsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbqresps', function (Blueprint $table) {
            $table->id();
            $table->integer('id_quest');
            $table->text('q1');
            $table->text('q2');
            $table->text('q3');
            $table->text('q4');
            $table->text('q5');
            $table->text('q6');
            $table->text('q7');
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
        Schema::dropIfExists('tbqresps');
    }
}
