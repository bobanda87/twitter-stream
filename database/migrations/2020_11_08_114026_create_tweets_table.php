<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTweetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tweets', function (Blueprint $table) {
            $table->id();
            $table->string('text')->nullable();
            $table->string('userName')->nullable();
            $table->string('name')->nullable();
            $table->string('profileImage')->nullable();
            $table->integer('retweetCount')->nullable();
            $table->integer('replyCount')->nullable();
            $table->integer('favoriteCount')->nullable();
            $table->dateTime('date')->nullable();
            $table->string('image')->nullable();

            // unique index for text and userName combination
            $table->unique(['text', 'userName']);
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
        Schema::dropIfExists('tweets');
    }
}
