<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use URL;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
       $this->middleware('permission:post-list', ['only' => ['index']]);
       $this->middleware('permission:post-create', ['only' => ['create','store']]);
       $this->middleware('permission:post-edit', ['only' => ['edit','update']]);
       $this->middleware('permission:post-delete', ['only' => ['destroy']]);
    }
    public function index()
    {
        $post = post::query();

        if ($keyword = request('search')) {
            $post->where('name', 'LIKE', "%{$keyword}%")->orWhere('content', 'LIKE', "%{$keyword}%")->orWhere('fullcontent', 'LIKE', "%{$keyword}%");
        }
        $post = $post->latest()->paginate(25);

        return view('Admin.post.index',compact('post'));
        $posts = post::whereDate('created_at', Carbon::today())->get();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $post = new post();
        $action = Url::route('admin.post.store');
        $title='افزودن مطلب';
        return view('Admin.post.create',compact(['post','action','title']));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Storage::disk('s3')->putFileAs('test' , $request->file('file'), $request->file('file')->getClientOriginalName());


        $post = auth()->user()->post()->create(
            [
                'name' => $request->name,
                'content' => $request->content,
                'fullcontent'=>$request->fullcontent,
                'active' => $request->active,
                'comment' => $request->comment,
                'noti' => $request->noti,
                'pic' => $request->pic,
                'type' => $request->type,
            ]
        );
         $post->category()->sync($request->category);
        alert()->success('اطلاعات با موفقیت ثبت شد','پیغام سیستم')->persistent("تایید");
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(post $post)
    {   $action = URL::route('admin.post.update', ['post' => $post->id]);
        $title='ویرایش مطلب';
        return view('Admin.post.create',compact(['post','action','title']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, post $post)
    {
        $post->update(
            [
                'name' => $request->name,
                'slug' => $request->slug,
                'content' => $request->content,
                'fullcontent'=>$request->fullcontent,
                'active' => $request->active,
                'comment' => $request->comment,
                'pic' => $request->pic,
            ]
        );
       
        $post->category()->sync($request->category);
        alert()->success('ویرایش  با موفقیت انجام شد','پیغام سیستم')->persistent('تایید');
        return redirect(route('admin.post.index'));
    }
    public function changeSardabir(Request $request)

    {

        $post = post::find($request->post_id);
        $post->sardabir = $request->status;
        $post->save();
        return response()->json(['success'=>'تغییرات با موفقیت ذخیره شد.']);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(post $post)
    {
     $post->delete();
     alert()->success('حذف با موفقیت انجام شد','پیغام سیستم')->persistent('تایید');
     return back();

    }
}
