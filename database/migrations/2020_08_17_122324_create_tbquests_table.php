<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTbquestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbquests', function (Blueprint $table) {
            $table->id();
            $table->integer('id_pro');
            $table->text('q1');
            $table->text('q2');
            $table->text('q3');
            $table->text('q4');
            $table->text('q5');
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
        Schema::dropIfExists('tbquests');
    }
}
