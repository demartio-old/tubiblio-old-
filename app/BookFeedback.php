<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BookFeedback extends Model
{
    protected $table = 'book_feedbacks';//table name
    public $timestamps = true;

    public function book()
    {
        return $this->belongsTo('App\Book', 'book_id');
    }
}
