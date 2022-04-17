<?php

namespace App\Http\Controllers\Admin;

use App\Models\Slideshow;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use URL;

class SlideshowController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
       $this->middleware('permission:slideshow-list', ['only' => ['index']]);
       $this->middleware('permission:slideshow-create', ['only' => ['create','store']]);
       $this->middleware('permission:slideshow-edit', ['only' => ['edit','update']]);
       $this->middleware('permission:slideshow-delete', ['only' => ['destroy']]);
    }
    public function index()
    {

        $slideshow = Slideshow::query();
        $slideshow = $slideshow->latest()->paginate(25);

        return view('Admin.slideshow.index',compact('slideshow'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $slideshow = new Slideshow();
        $action = URL::route('admin.slideshow.store');
        $title='افزودن اسلایدشو';
        return view('Admin.slideshow.create',compact(['slideshow','action','title']));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Slideshow::create($request->all());
        alert()->success('اطلاعات با موفقیت ثبت شد','پیغام سیستم')->persistent("تایید");
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Slideshow  $slideshow
     * @return \Illuminate\Http\Response
     */
    public function show(Slideshow $slideshow)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Slideshow  $slideshow
     * @return \Illuminate\Http\Response
     */
    public function edit(Slideshow $slideshow)
    {
        $action = URL::route('admin.slideshow.update', ['slideshow' => $slideshow->id]);
        $title='ویرایش اسلایدشو';
        return view('Admin.slideshow.create',compact(['slideshow','action','title']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Slideshow  $slideshow
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Slideshow $slideshow)
    {
        $slideshow->update($request->all());
        alert()->success('ویرایش  با موفقیت انجام شد','پیغام سیستم')->persistent('تایید');
        return redirect(route('admin.slideshow.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Slideshow  $slideshow
     * @return \Illuminate\Http\Response
     */
    public function destroy(Slideshow $slideshow)
    {
        $slideshow->delete();
        alert()->success('حذف با موفقیت انجام شد','پیغام سیستم')->persistent('تایید');
        return back();
    }
}
