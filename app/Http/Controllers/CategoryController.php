<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $active = 'category';
        $categories = Category::all();
        
        return view('categories.index', compact('active', 'categories'));
    }

    public function detail($id){
        $category = Category::findOrFail($id);
        return view('categories.detail', compact('category'));
    }
}
