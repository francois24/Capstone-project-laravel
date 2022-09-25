<?php

namespace App\Http\Controllers;
use App\Models\Users;
use App\Models\Contact;
use Illuminate\Http\Request;

class usersController extends Controller
{
    public function index()
    {
        $users = contact::all();
        return view ('admin.index')->with('users', $users);
    }
    
    public function create()
    {
        return view('admin.create');
    }
  
    public function store(Request $request)
    {
        $input = $request->all();
        users::create($input);
        return redirect('users')->with('flash_message', 'Users Added!');  
    }
    
    public function show($id)
    {
        $users = Contact::find($id);
        return view('admin.show')->with('users', $users);
    }
    
    public function edit($id)
    {
        $users = Contact::find($id);
        return view('admin.edit')->with('users', $users);
    }
  
    public function update(Request $request, $id)
    {
        $user = Contact::find($id);
        $input = $request->all();
        $user->update($input);
        return redirect('admin')->with('flash_message', 'Users Updated!');  
    }
  
    public function destroy($id)
    {
        Contact::destroy($id);
        return redirect('admin')->with('flash_message', 'User deleted!');  
    }
}
