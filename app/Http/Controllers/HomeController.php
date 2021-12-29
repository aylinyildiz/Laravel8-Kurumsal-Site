<?php

namespace App\Http\Controllers;

use App\Models\Content;
use App\Models\Image;
use App\Models\Menu;
use App\Models\Message;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class HomeController extends Controller
{
    public static function menuList()
    {
        return Menu::where('parentid', '=', 0)->with('children')->get();
    }

    public static function getSetting()
    {
        return Setting::first();
    }


    public function index()
    {
        $setting = Setting::first();
        $slider = Content::select('id','title', 'image')->limit(4)->get();
        $announcement= Content::select('id','title', 'image', 'announcement')->limit(4)->inRandomOrder()->get();
        $news= Content::select('id','title', 'image','news')->limit(4)->get();


        $data = ['setting' => $setting,
                 'slider' => $slider,
                 'announcement' => $announcement,
                 'news' => $news];

        return view('home.index', $data);
    }

    public function homedetail($id)
    {
        $data = Content::find($id);
        $datalist = Image::where('content_id', $id)->get();
        return view('home.homedetail', ['data'=>$data, 'datalist'=>$datalist]);
    }

    public function getcontent(Request $request)
    {
        $data = Content::where('title',$request->input('search'))->first();
        return redirect()->route('content',['id'=>$data->id]);
    }


    public function aboutus()
    {
        $setting = Setting::first();
        return view('home.about', ['setting' => $setting]);
    }

    public function menucontent($id)
    {
        $datalist = Content::where('menu_id',$id)->get();
        $data = Menu::find($id);
        return view('home.menu_content', ['data'=>$data,'datalist'=>$datalist]);
    }



    public function faq()
    {
        return view('home.aboutus');
    }

    public function references()
    {
        $setting = Setting::first();
        return view('home.references',['setting'=>$setting]);
    }

    public function contact()
    {
        $setting = Setting::first();
        return view('home.contact',['setting'=>$setting]);
    }

    public function sendmessage(Request $request)
    {
        $data = new Message();
        $data->name=$request->input('name');
        $data->email=$request->input('email');
        $data->subject=$request->input('subject');
        $data->message=$request->input('message');
        $data->save();
        return redirect()->route('contact')->with('Success', 'Mesajınız alınmıştır. Teşekkür ederiz !');

    }

    public function login()
    {
        return view('admin.login');
    }

    public function logincheck(Request $request)
    {
        if ($request->isMethod('post')) {
            $credentials = $request->only('email', 'password');
            if (Auth::attempt($credentials)) {
                $request->session()->regenerate();

                return redirect()->intended('admin');
            }
            return back()->withErrors([
                'email' => 'The provided credentials do not match our records',
            ]);
        } else {
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
