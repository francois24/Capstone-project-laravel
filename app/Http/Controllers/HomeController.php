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

             $users =Contact::orderBy('updated_at','DESC')
             ->get();
            return view('admin.index')->with('users', $users);

        }else{
            return view('dashboard');
        }
    }
    
}
