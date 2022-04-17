<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Menu;
use Illuminate\Http\Request;
use URL;
class menuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
       $this->middleware('permission:menu-list', ['only' => ['index']]);
       $this->middleware('permission:menu-create', ['only' => ['create','store']]);
       $this->middleware('permission:menu-edit', ['only' => ['edit','update']]);
       $this->middleware('permission:menu-delete', ['only' => ['destroy']]);
    }
    public function index()
    {
        $menu = Menu::query();

        if($keyword = request('parent')) {
            $menu->where('parent' , $keyword);
        }
        else
        {
            $menu->where('parent' , 0);
        }

        $menu = $menu->latest()->paginate(25);

       return view('Admin.menu.index',compact('menu'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $menu = new Menu();
        $action = Url::route('admin.menu.store');
        $title='افزودن منو';
        return view('Admin.menu.create',compact(['menu','action','title']));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $menu=Menu::create($request->all());
        alert()->success('اطلاعات با موفقیت ثبت شد','پیغام سیستم')->persistent("تایید");
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\menu  $menu
     * @return \Illuminate\Http\Response
     */
    public function show(menu $menu)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\menu  $menu
     * @return \Illuminate\Http\Response
     */
    public function edit(Menu $menu)
    {
        $action = Url::route('admin.menu.update',$menu);
        $title='ویرایش منو';
        return view('Admin.menu.create',compact('action','title','menu'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\menu  $menu
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, menu $menu)
    {
        $menu->update($request->all());
        alert()->success('ویرایش  با موفقیت انجام شد','پیغام سیستم')->persistent('تایید');
        return redirect(route('admin.menu.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\menu  $menu
     * @return \Illuminate\Http\Response
     */
    public function destroy(Menu $menu)
    {
        $menu->delete();
        alert()->success('حذف با موفقیت انجام شد','پیغام سیستم')->persistent('تایید');
        return back();
    }
}
