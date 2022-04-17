<?php

namespace App\Http\Controllers\Admin;

use App\Models\MainPage;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MainPageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $mainpage = MainPage::find(1);
        return view('Admin.mainpage.create', compact('mainpage'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $mainpage = MainPage::updateOrCreate(
            [
                'id'   => 1
            ],
            [
                'about' => $request['about'],
                'picabout' => $request['picabout'],
                'logo'    => $request['logo'],
                'insta' => $request['insta'],
                'face' => $request['face'],
                'telegram' => $request['telegram'],
                'whatsapp' => $request['whatsapp'],
                'adress' => $request['adress'],
                'tel' => $request['tel'],
                'toeet' => $request['toeet'],
                'linkdin' => $request['linkdin'],
                'aboutfooter' => $request['aboutfooter'],
                'email'=>$request['email']
            ]
        );
        alert()->success('اطلاعات با موفقیت ثبت شد', 'پیغام سیستم')->persistent("تایید");
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\MainPage  $mainPage
     * @return \Illuminate\Http\Response
     */
    public function show(MainPage $mainPage)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\MainPage  $mainPage
     * @return \Illuminate\Http\Response
     */
    public function edit(MainPage $mainPage)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\MainPage  $mainPage
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, MainPage $mainPage)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\MainPage  $mainPage
     * @return \Illuminate\Http\Response
     */
    public function destroy(MainPage $mainPage)
    {
        //
    }
}
