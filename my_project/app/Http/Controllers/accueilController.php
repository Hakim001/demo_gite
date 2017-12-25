<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\UpdatePost;
/**
* HomeController
*/

class AccueilController extends Controller
{
    public function index()
    {   
        $user = \App\User::find(20);
        
        $posts = $user->posts;
        
        $post = \App\post::find(3);
        
        $user = $post->user;
        
        
       return view('accueil.index', compact('posts', 'user'));
    }
    
    public function create()
    {
        return view('welcome');
    }
    
    public function logic()
    {
        return view('accueil.page');
    }
    
    public function edit()
    {
        return "édition middelware test c'est bon ! une petite suite pour git dernière.";
    }
    
    public function update(UpdatePost $request)
    {
     $inputs = $request->input('name');
    
        
     dd($request->all());  
    }
}
