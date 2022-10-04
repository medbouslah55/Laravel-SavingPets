<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function UserView(){
        $data['allData'] = User::all();
        return view('backend.user.view_user', $data);
    }

    public function UserStore(Request $request){
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|unique:users|max:255',
        ]);

        $data = new User();
        $data->name = $request->name;
        $data->email = $request->email;
        $data->password = bcrypt($request->password);
        $data->usertype = $request->usertype;
        $data->save();

        return redirect()->route('user.view')->with('success', 'Data Inserted Successfully');
    }

    public function UserEdit($id){
    	$editData = User::find($id);
    	return view('backend.user.edit_user', compact('editData'));
    }

    public function UserUpdate(Request $request, $id){
    	$data = User::find($id);
    	$data->name = $request->name;
    	$data->email = $request->email;
        $data->usertype = $request->usertype;
    	$data->save();

    	return redirect()->route('user.view')->with('success', 'Data Inserted Successfully');
    }

    public function UserDelete($id){
        $user = User::find($id);
    	$user->delete();

    	return redirect()->route('user.view')->with('success', 'Data Deleted Successfully');      
    }
}
