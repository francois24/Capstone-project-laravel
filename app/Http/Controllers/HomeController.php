<?php

namespace App\Http\Controllers;
use App\Models\Users;
use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class HomeController extends Controller
{
    public function index(){
        $role = Auth::user()->role;

        if($role=='admin'){
            $users =Contact::all();
            return view('admin.index')->with('users', $users);
        }else{
            return view('dashboard');
        }
    }

    // public function create()
    // {
    //     return view('admin.create');
    // }
  
    // public function store(Request $request)
    // {
    //     $input = $request->all();
    //     users::create($input);
    //     return redirect('users')->with('flash_message', 'Tasks Addedd!');  
    // }

    // public function show($id)
    // {
    //     $users = Users::find($id);
    //     return view('admin.show')->with('Users', $users);
    // }
    
}
