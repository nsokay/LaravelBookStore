<?php

namespace App\Http\Controllers;

use App\Book;
use App\Comment;

class CommentsController extends Controller
{
    //

    public function store(Book $book)
    {

        $this->validate(request(), ['body' => 'required|min:2']);

        $book->addComment(request('body'));

        return back();

    }
}
