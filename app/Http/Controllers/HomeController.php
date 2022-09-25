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
           
            $users = array("contacts" => DB::table('contacts')->orderBy('created_at','desc')->paginate(10));
            return view ('admin.index',$users);

             // $users =Contact::all();
            // return view('admin.index')->with('users', $users);

        }else{
            return view('dashboard');
        }
    }
    
}
