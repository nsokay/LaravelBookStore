<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreBook;
use Illuminate\Http\Request;
use App\Book;

class BookController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth')->except(['index', 'show']);
    }
    public function index()
    {
        $books = Book::latest()->get();
        return view('books.index', compact('books'));
    }

    public function show(Book $book)
    {
        return view('books.show', compact('book'));
    }

    public function create()
    {
        return view('books.create');
    }

    public function store(StoreBook $request)
    {

        $validated = $request->validated();
        Book::create([
                'title' => request('title'),
                'description' => request('description'),
                'user_id' => auth()->id(),
            ]);

        return redirect('/');
    }
}
