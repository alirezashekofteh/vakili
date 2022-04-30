<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use URL;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
       $this->middleware('permission:service-list', ['only' => ['index']]);
       $this->middleware('permission:service-create', ['only' => ['create','store']]);
       $this->middleware('permission:service-edit', ['only' => ['edit','update']]);
       $this->middleware('permission:service-delete', ['only' => ['destroy']]);
    }
    public function index()
    {
        $Service = Service::query();

        if ($keyword = request('search')) {
            $Service->where('name', 'LIKE', "%{$keyword}%")->orWhere('content', 'LIKE', "%{$keyword}%")->orWhere('fullcontent', 'LIKE', "%{$keyword}%");
        }
        $Service = $Service->latest()->paginate(25);

        return view('Admin.service.index',compact('Service'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $Service = new Service();
        $action = Url::route('admin.Service.store');
        $title='افزودن خدمت جدید';
        return view('Admin.service.create',compact('Service','action','title'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $Service = auth()->user()->Service()->create(
            [
                'name' => $request->name,
                'content' => $request->content,
                'fullcontent'=>$request->fullcontent,
                'active' => $request->active,
                'pic' => $request->pic,
            ]
        );
        alert()->success('اطلاعات با موفقیت ثبت شد','پیغام سیستم')->persistent("تایید");
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Service  $Service
     * @return \Illuminate\Http\Response
     */
    public function show(Service $Service)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Service  $Service
     * @return \Illuminate\Http\Response
     */
    public function edit(Service $Service)
    {
        $action = URL::route('admin.Service.update', ['Service' => $Service->id]);
        $title='ویرایش مطلب';
        return view('Admin.service.create',compact(['Service','action','title']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Service  $Service
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Service $Service)
    {
        $Service->update(
            [
                'name' => $request->name,
                'slug' => $request->slug,
                'content' => $request->content,
                'fullcontent'=>$request->fullcontent,
                'active' => $request->active,
                'pic' => $request->pic,

            ]
        );
        alert()->success('ویرایش  با موفقیت انجام شد','پیغام سیستم')->persistent('تایید');
        return redirect(route('admin.Service.index'));
    }
    public function changeSardabir(Request $request)

    {

        $Service = Service::find($request->Service_id);
        $Service->sardabir = $request->status;
        $Service->save();
        return response()->json(['success'=>'تغییرات با موفقیت ذخیره شد.']);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Service  $Service
     * @return \Illuminate\Http\Response
     */
    public function destroy(Service $Service)
    {
     $Service->delete();
     alert()->success('حذف با موفقیت انجام شد','پیغام سیستم')->persistent('تایید');
     return back();

    }
}
