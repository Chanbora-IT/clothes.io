<?php

namespace App\Http\Controllers\Backend;

use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function OpenRegister(){
        return view('Backend.register');
    }
    public function Register(Request $request){
        $this->validate($request, [
            'profile' => 'required|file|max:255',
        ]);
        $username = $request->name;
        $email = $request->email;
        $password = Hash::make($request->password);
        $profile = $request->profile;

        if($profile){
            $newProfile = date('dmyhis').'-'.$profile->getClientOriginalName();
            $path = 'Images';
            $profile -> move($path,$newProfile);
        }
        try{

            DB::table('users')->insert([
                'name'=>$username,
                'email'=>$email,
                'password'=>$password,
                'thumbnail'=>$newProfile,
            ]);
            return redirect('/admin/login');
        }
        catch(Exception $e){
            return redirect('/admin/register')->with('unsuccess',$e->getmessage());
        }
    }
    public function OpenLogin(){
        return view('Backend.login');
    }
    public function Login(Request $request){
        if(Auth::attempt(['name' => $request->name_email, 'password' => $request->password])){
            return redirect('/admin');
        }
        else if(Auth::attempt(['email'=>$request->email, 'password'=>$request->password])){
            return redirect('/admin');
        }
        else{
            return redirect('/login');
        }
    }

}
