<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $fillable = ['book_title', 'author', 'filename', 'prc_file', 'pdf_file', 'image'];
}
