<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Menu;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MenuController extends Controller
{
    protected $appends = [
        'getParentsTree'
    ];

    public static function getParentsTree($menu, $title)
    {
        if($menu->parentid == 0)
        {
            return $title;
        }
        $parent = Menu::find($menu->parentid);
        $title=$parent->title . '>' . $title;
        return MenuController::getParentsTree($parent, $title);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $datalist= Menu::with('children')->get();
        return view('admin.menu',['datalist'=>$datalist]);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function add()
    {
        $datalist= Menu::with('children')->get();;
        return view('admin.menu_add',['datalist'=>$datalist]);
    }

    /**
     * Insert data
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {


        DB::table('menus')->insert([
            'parentid'=>$request->input('parentid'),
            'title'=>$request->input('title'),
            'keywords'=>$request->input('keywords'),
            'description'=>$request->input('description'),
            'status'=>$request->input('status')
        ]);
        return redirect()->route('admin_menu');
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Menu  $menu
     * @return \Illuminate\Http\Response
     */
    public function show(Menu $menu)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Menu  $menu
     * @return \Illuminate\Http\Response
     */
    public function edit(Menu $menu, $id)
    {
        $data=Menu::find($id);
        $datalist= Menu::with('children')->get();
        return view('admin.menu_edit',['data'=>$data,'datalist'=>$datalist]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Menu  $menu
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Menu $menu, $id)
    {
        $data=Menu::find($id);
        $data->parentid=$request->input('parentid');
        $data->title=$request->input('title');
        $data->keywords=$request->input('keywords');
        $data->description=$request->input('description');
        $data->status=$request->input('status');
        $data->save();
        return redirect()->route('admin_menu');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Menu  $menu
     * @return \Illuminate\Http\Response
     */
    public function destroy(Menu $menu, $id)
    {
        DB::table('menus')->where('id', '=', $id)->delete();
        return redirect()->route('admin_menu');
    }
}
