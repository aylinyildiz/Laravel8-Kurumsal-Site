<?php

namespace App\Http\Controllers;


use App\Models\Content;
use App\Models\Faq;
use App\Models\Image;
use App\Models\Menu;
use App\Models\Message;
use App\Models\Comment;
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
        $slider = Content::select('id', 'title', 'image')->limit(3)->get();
        $announcement = Content::select('id', 'title', 'image', 'announcement', 'created_at')->inRandomOrder()->get();
        $liste=collect([]);
        foreach ($announcement as $item) {
            if ($item->announcement!=""){
                $liste->add($item);
            }
        }
        $activity = Content::select('id', 'title', 'image', 'activity','created_at')->get();
        $liste2=collect([]);
        foreach ($activity as $item) {
            if ($item->activity!=""){
                $liste2->add($item);
            }
        }
        $news = Content::select('id', 'title','detail', 'image', 'news','created_at')->get();
        $liste3=collect([]);
        foreach ($news as $item) {
            if ($item->news!=""){
                $liste3->add($item);
            }
        }

        $data = ['setting' => $setting,
            'slider' => $slider,
            'announcement' => $liste,
            'activity' => $liste2,
            'news' => $liste3];

        return view('home.index', $data);
    }

    public function contentdetail($id)
    {
        $data = Content::find($id);
        $datalist = Image::where('content_id', $id)->get();
        $comments = Comment::where('content_id', $id)->get();
        $activity = Content::select('id', 'title', 'image', 'activity', 'created_at')->get();
        $liste2=collect([]);
        foreach ($activity as $item) {
            if ($item->activity!=""){
                $liste2->add($item);
            }
        }
        return view('home.content_detail', ['data' => $data, 'datalist' => $datalist, 'comments' => $comments, 'activities' =>$liste2]);
    }

    public function homedetail($id)
    {
        $data = Content::find($id);
        $datalist = Image::where('content_id', $id)->get();
        return view('home.homedetail', ['data' => $data, 'datalist' => $datalist]);
    }

    //comment
    public static function countcomment($id)
    {
        return Comment::where('content_id', $id)->count();
    }

    public static function avgcomment($id)
    {
        return Comment::where('content_id', $id)->average('rate');
    }


    //arama
    public function content($id)
    {
        $data = Content::find($id);
        $datalist = Image::where('content_id', $id)->get();
        $comments = Comment::where('content_id', $id)->get();
        $activity = Content::select('id', 'title', 'image', 'activity', 'created_at')->get();
        $liste2=collect([]);
        foreach ($activity as $item) {
            if ($item->activity!=""){
                $liste2->add($item);
            }
        }
        return view('home.content_detail', ['data' => $data, 'datalist' => $datalist, 'comments' => $comments, 'activities'=>$liste2]);
    }


    public function getcontent(Request $request)
    {
        $search = $request->input('search');
        $count = Content::where('title', 'like', '%' . $search . '%')->get()->count();

        if ($count == 1) {
            $data = Content::where('title', $request->input('search'))->first();
            return redirect()->route('content', ['id' => $data->id]);
        }
        return redirect()->route('contentlist', ['search' => $search]);
    }

    public function contentlist($search)
    {
        $datalist = Content::where('title', 'like', '%' . $search . '%')->get();
        $activity = Content::select('id', 'title', 'image', 'activity', 'created_at')->get();
        $liste2=collect([]);
        foreach ($activity as $item) {
            if ($item->activity!=""){
                $liste2->add($item);
            }
        }
        return view('home.search_content', ['search' => $search, 'datalist' => $datalist, 'activities'=>$liste2]);
    }


    public function aboutus()
    {
        $setting = Setting::first();
        return view('home.about', ['setting' => $setting]);
    }

    public function menucontent($id)
    {
        $datalist = Content::where('menu_id', $id)->get();
        $data = Menu::find($id);
        $activity = Content::select('id', 'title', 'image', 'activity', 'created_at')->get();
        $liste2=collect([]);
        foreach ($activity as $item) {
            if ($item->activity!=""){
                $liste2->add($item);
            }
        }
        return view('home.menu_content', ['data' => $data, 'datalist' => $datalist, 'activities' =>$liste2]);
    }


    public function faq()
    {
        $datalist = Faq::all()->sortBy('id');
        return view('home.faq', ['datalist' => $datalist]);
    }

    public function references()
    {
        $setting = Setting::first();
        return view('home.references', ['setting' => $setting]);
    }

    public function contact()
    {
        $setting = Setting::first();
        return view('home.contact', ['setting' => $setting]);
    }

    public function sendmessage(Request $request)
    {
        $data = new Message();
        $data->name = $request->input('name');
        $data->email = $request->input('email');
        $data->subject = $request->input('subject');
        $data->message = $request->input('message');
        $data->save();
        return redirect()->route('contact')->with('Success', 'Mesaj??n??z al??nm????t??r. Te??ekk??r ederiz !');

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
