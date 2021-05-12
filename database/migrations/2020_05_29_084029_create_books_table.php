<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('books', function (Blueprint $table) {
            $table->id();
            $table->string('isbn', '')->default('isbn');//255 chars?
            $table->string('author')->default('author');
            $table->string('title')->default('title');
            $table->text('review')->nullable(true);
            $table->string('category')->default('adventure');
//            $table->string('review')->default('review');
            $table->date('r_date')->default(date("Y-m-d H:i:s"));// De string a date
            $bookCoverRoute = '/assets/img/books/covers/default.jpg';
            $table->string('book_cover_route')->default($bookCoverRoute);
            //Trouble
            $table->timestamp('updated_at', 0)->default(date("Y-m-d H:i:s"));
            $table->timestamp('created_at', 0)->default(date("Y-m-d H:i:s"));;
//            $table->timestamps();  //updated_at and created_at fields are nulls
            //Temporal fix Laravel
//            $table->string("updated_at")->default(date("Y-m-d H:i:s"));
//            $table->string("created_at")->default(date("Y-m-d H:i:s"));
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('books');
    }
}
