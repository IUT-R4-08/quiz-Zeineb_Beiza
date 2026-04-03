<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use Illuminate\View\View;

class CategoryController extends Controller
{
    public function index(): View
    {
    
        $categories = Category::all();
   
        return view('dashboard', compact('categories'));
    }
}
