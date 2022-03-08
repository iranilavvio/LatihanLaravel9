<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\User;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index()
    {
        $active = 'book';
        $books = Book::latest('reviews_count')->get();
        
        return view('book.index', compact('active', 'books'));
    }

    public function detail($slug){
        $book = Book::withCount('Reviews')->whereSlug($slug)->firstOrFail();
        $reviews = $book->reviews()->with('user')->paginate(2);

        return view('book.detail', compact('book', 'reviews'));
    }

    public function user($id)
    {
      $user = User::whereId($id)->firstOrFail();
      $books = $user->books()->latest()->get();

      return view('book.user', compact('user', 'books'));
    }
}
