<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVotesTable extends Migration
{
    public function up()
    {
        Schema::create('votes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('want_id')->index()->foreign('want_id')->references('id')->on('wants');
            $table->bigInteger('user_id')->index()->foreign('user_id')->references('id')->on('users');
            $table->timestamps();
        });
    }
}
