<?php

namespace App\Http\Controllers;
 
   use App\Models\User;
   use Illuminate\Support\Facades\DB;
 
   class UserController extends Controller
   {
    /**
     * Show the profile for a given user.
     *
     * @param  int  $id
     * @return \Illuminate\View\View
     */
    public function show($id)
    {
        return view('user.profile', [
            'user' => User::findOrFail($id)
        ]);
    }
    
     /**
     * Show a list of all of the application's users.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = DB::select('select * from users where active = ?', [1]);
 
        return view('user.index', ['users' => $users]);
    }
    
    
    public function insert($id)
    {
     
        $res = DB::insert('insert into users (id, name) values (?, ?)', [1, 'Marc']);
        return $res;
    }
}
