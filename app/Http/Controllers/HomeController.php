<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public static function menuList()
    {
        return Menu::where('parentid', '=' ,0)->with('children')->get();
    }

    public static function getSetting()
    {
        return Setting::first();
    }


    public function index()
    {
        $setting = Setting::first();
        return view('home.index', ['setting'=>$setting]);
    }

    public function aboutus()
    {
        return view('home.aboutus');
    }
    public function faq()
    {
        return view('home.aboutus');
    }public function references()
{
    return view('home.aboutus');
}
    public function contact()
    {
        return view('home.aboutus');
    }

    public function login()
    {
        return view('admin.login');
    }

    public function logincheck (Request $request)
    {
        if($request->isMethod('post'))
        {
            $credentials = $request->only('email','password');
            if(Auth::attempt($credentials)) {
                $request->session()->regenerate();

                return redirect()->intended('admin');
            }
            return back()->withErrors([
                'email'=>'The provided credentials do not match our records',
            ]);
        }
        else{
            return view('admin.login');
        }
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }
}
