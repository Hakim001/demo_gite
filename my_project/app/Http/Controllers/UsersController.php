<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\User;
use App\Http\Requests\UpdatePost;

/**
* usersController
*/

class UsersController extends Controller
{
    public function index()
    {
        //$users = DB::table('users')->paginate(12);
        $users = User::paginate(12);
        
        //dd($users);
        return view('users.index',compact('users'));
    }
    
    public function create()
    {
        return view('users.create');
    }
    
    public function store(UpdatePost $request)
    {
        //dd($request->all());
       /* $user = new User();
        
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        
        $user->save();*/
        $user = User::create(
        [
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'username' => 'at Hakim',
             ]);
        return redirect()->back();
    }
    public function show($id){
        $user = User::findorfail($id);
        //dd($user->profil->twiter);
        
        $profil = \App\profil::find(1);
        dd($profil->user);
        return view('users.index', compact('user'));
    }
    
    public function destroy($id)
    {
        $user = User::find($id);
         
        $user->delete();
        
        return redirect()->route('users.index');
    }
    
   
}