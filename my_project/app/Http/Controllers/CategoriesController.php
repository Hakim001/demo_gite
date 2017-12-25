<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    public function index()
    {
        $categories = \App\Category::all();
        
        return view('categories.index', compact('categories'));
    }
    
    public function show($id)
    {
        $cat =\App\category::findOrFail($id);
        //$posts = $cat->posts;
        
        
        return view('categories.show', compact('cat'));
    }
}
