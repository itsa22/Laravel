<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Hash;
use Session;

class PagesController extends Controller
{
    //home page
    public function home(){
        return view('pages.home');
    }
    //About page 
    public function about(){
        return view('pages.about');
    }
    //Contact page 
    public function contact(){
        return view('pages.contact');
    }
    //services page 
    public function services(){
        return view('pages.services');
    }
    //register page 
    public function register(){
        return view('pages.register');
    }
    //login page 
    public function login(){
        return view('pages.login');
    }
    //function registerUser
    public function registerUser(Request $request){
        $request->validate([
            'name'=>'required',
            'email'=>'required|email|unique:users',
            'password'=>'required|min:5|max:12'
        ]);
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $res = $user->save();
        if ($res){
            return back()->with('success','registered successfuly');
        }else{
            return back()->with('fail','something wrong');
        }
    }
    public function loginUser(Request $request){
        $request->validate([
            'email'=>'required|email|',
            'password'=>'required|min:5|max:12'
        ]);
        $user  = User::where('email','=',$request->email)->first();
        if ($user){
            if(Hash::check($request->password, $user->password)){
                $request->session()->put('loginId',$user->id);
                return redirect('dashboard');
            }else{
                return back()->with('fail','Password not matches.');
            }
        }else{
            return back()->with('fail','This email is not registered.');
        }
    }
    public function dashboard(){
        $data  = array();
        if(Session::has('loginId')){
            $data  = User::where('id','=',Session::get('loginId'))->first();
        }
        return view('pages.dashboard',compact('data'));
    }
    public function logout(){
        if (Session::has('loginId')){
            Session::pull('loginId');
            return redirect('login');
        }
    }
}