<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use PhpParser\Node\Stmt\TryCatch;

class UserController extends Controller
{
    //
    public function allUsers()
    {
        $all_users = User::all();
        return view('/user/users', compact('all_users'));
    }

    public function loadAddUser()
    {
        return view('/user/add-user');
    }

    public function addUser(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'mobile_no' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:8',
            'password_confirm' => 'same:password',

        ]);

        $new_user = new User;
        $new_user->name = $request->name;
        $new_user->mobile_no = $request->mobile_no;
        $new_user->email = $request->email;
        $new_user->password = Hash::make($request->password);
        $new_user->save();

        return redirect('/users');
    }


    public function loadEditForm($id)
    {
        $user = User::find($id);

        return view('/user/edit-user', compact('user'));
    }

    public function editUser(Request $request)
    {
        // perform form validation here
        $request->validate([
            'name' => 'required|string',
            'mobile_no' => 'required',
            'email' => 'required|email',

        ]);

        // update user here
        $update_user = User::where('id', $request->id)->update([
            'name' => $request->name,
            'mobile_no' => $request->mobile_no,
            'email' => $request->email,
        ]);

        return redirect('/users')->with('success', 'User Updated Successfully');
    }


    public function deleteUser($id)
    {
        User::where('id', $id)->delete();
        return redirect('/users')->with('success', 'User Deleted successfully!');
    }



    ///////////////////////////////// Authentication ////////////////////////////////////////


    public function Login()
    {
        return view('auth.login');
    }

    public function postLogin(Request $request)
    {
        // dd($request->all())->get();
        $login = User::where("email", $request->email)->first();
        // dd($request->password);
        // dd($login->password);

        if ($login && Hash::check($request->password, $login->password)) {
            return redirect('products');
        } else {
            return 'email or password is incorrect';
        }
    }

    public function Register()
    {
        return view('auth.register');
    }

    public function postRegister(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'mobile_no' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:8',
            'password_confirm' => 'same:password'
        ]);

        User::create([
            'name' => $request->name,
            'mobile_no' => $request->mobile_no,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ]);
        return redirect('users');
    }

    // public function Logout()
    // {
    //     Auth::logout();
    //     return redirect()->route('get.login');
    // }
}
