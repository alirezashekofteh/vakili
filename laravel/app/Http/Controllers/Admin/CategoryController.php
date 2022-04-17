<?php

namespace App\Http\Controllers\Admin;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use URL;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
       $this->middleware('permission:category-list', ['only' => ['index']]);
       $this->middleware('permission:category-create', ['only' => ['create','store']]);
       $this->middleware('permission:category-edit', ['only' => ['edit','update']]);
       $this->middleware('permission:category-delete', ['only' => ['destroy']]);
    }

    public function index()
    {
        $category = Category::query();

        if ($keyword = request('search')) {
            $category->where('name', 'LIKE', "%{$keyword}%");
        }

        if($keyword = request('parent')) {
            $category->where('parent' , $keyword);
        }
        else
        {
            $category->where('parent' , 0);
        }

        $category = $category->latest()->paginate(25);

       return view('Admin.category.index',compact('category'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $category = new Category();
        $action = Url::route('admin.category.store');
        $title='افزودن دسته بندی';
        return view('Admin.category.create',compact(['category','action','title']));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $Category=Category::create($request->all());
        alert()->success('اطلاعات با موفقیت ثبت شد','پیغام سیستم')->persistent("تایید");
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Category  $Category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $Category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Category  $Category
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
        $action = Url::route('admin.category.update',$category);
        $title='افزودن دسته بندی';
        return view('Admin.category.create',compact('action','title','category'));
    }

   
    public function update(Request $request,Category $category)
    {
        $category->update($request->all());
        alert()->success('ویرایش  با موفقیت انجام شد','پیغام سیستم')->persistent('تایید');
        return redirect(route('admin.category.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Category  $Category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        $category->delete();
        alert()->success('حذف با موفقیت انجام شد','پیغام سیستم')->persistent('تایید');
        return back();
    }
}
