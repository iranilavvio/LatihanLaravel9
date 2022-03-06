<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index()
    {
        $active = 'book';
        $books = Book::all();
        
        return view('book.index', compact('active', 'books'));
    }

    public function detail($slug){
        // $book = Book::where('id',$id)->with('category')->first();
        $book = Book::whereSlug($slug)->firstOrFail();
        return view('book.detail', compact('book'));
    }
}
