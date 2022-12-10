<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBukusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bukus', function (Blueprint $table) {
            $table->id();
            $table->foreignId('loan_id');
            $table->foreignId('similarity_id');
            $table->foreignId('reccomendation_id');
            $table->string('title');
            $table->string('publisher');
            $table->string('call_numb');
            $table->string('isbn_issn');
            $table->string('place_publish');
            $table->integer('copy')->nullable();
            $table->string('slug')->unique();
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
        Schema::dropIfExists('bukus');
    }
}
