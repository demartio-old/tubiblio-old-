<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $table = 'books';//table name
    public $timestamps = true;

    public function bookFeedback() {
//        $this->hasOne('/App/BookFeedback', 'book_id');
        $this->hasOne('/App/BookFeedback', 'book_id');
    }

    protected $fillable = [//whitelist fields
      'title',
//      'review',
    ];

    protected $guarded = [//blacklist fields

    ];

}
