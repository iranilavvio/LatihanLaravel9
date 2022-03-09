<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::withCount('books')->with('books')->get();
        
        return view('categories.index', compact('categories'));
    }

    public function detail($id){
        $category = Category::whereId($id)->with(['books' => function ($query) {
            $query->with('category');
        }])->firstOrFail();
        return view('categories.detail', compact('category'));
    }
}
