<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookFeedbacksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('book_feedbacks', function (Blueprint $table) {
            $table->id();
            $table->integer('favs')->default(0);
            $table->integer('likes')->default(0);
            $table->integer('dislikes')->default(0);
            $table->integer('very_good')->default(0);
            $table->integer('good')->default(0);
            $table->integer('normal')->default(0);
            $table->integer('bad')->default(0);
            $table->integer('very_bad')->default(0);
            $table->unsignedBigInteger('book_id');
            $table->foreign('book_id')->references('id')->on('books');
            $table->timestamp('updated_at', 0);
            $table->timestamp('created_at', 0);
//            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('book_feedbacks');
    }
}
