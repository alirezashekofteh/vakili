<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use URL;
class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
       $this->middleware('permission:product-list', ['only' => ['index']]);
       $this->middleware('permission:product-create', ['only' => ['create','store']]);
       $this->middleware('permission:product-edit', ['only' => ['edit','update']]);
       $this->middleware('permission:product-delete', ['only' => ['destroy']]);
    }
    public function index()
    {
        $Product = Product::query();

        if ($keyword = request('search')) {
            $Product->where('name', 'LIKE', "%{$keyword}%")->orWhere('content', 'LIKE', "%{$keyword}%")->orWhere('fullcontent', 'LIKE', "%{$keyword}%");
        }
        $Product = $Product->latest()->paginate(25);

        return view('Admin.Product.index',compact('Product'));
        $products = Product::whereDate('created_at', Carbon::today())->get();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $product = new Product();
        $action = Url::route('admin.product.store');
        $title='افزودن محصول جدید';
        return view('Admin.Product.create',compact(['product','action','title']));
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



        $Product = auth()->user()->Product()->create(
            [
                'name' => $request->name,
                'content' => $request->content,
                'fullcontent'=>$request->fullcontent,
                'active' => $request->active,
                'comment' => $request->comment,
                'pic'=>$request->pic,
                'service_id'=> $request->service_id,

            ]
        );
        alert()->success('اطلاعات با موفقیت ثبت شد','پیغام سیستم')->persistent("تایید");
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $Product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $Product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $Product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        $action = URL::route('admin.product.update', ['product' => $product->id]);
        $title='ویرایش محصول';
        return view('Admin.product.create',compact(['product','action','title']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $Product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $Product)
    {

        $Product->update(
            [
                'name' => $request->name,
                'slug' => $request->slug,
                'content' => $request->content,
                'fullcontent'=>$request->fullcontent,
                'active' => $request->active,
                'comment' => $request->comment,
                'pic'=>$request->pic,
                'service_id'=> $request->service_id,
            ]
        );
        alert()->success('ویرایش  با موفقیت انجام شد','پیغام سیستم')->persistent('تایید');
        return redirect(route('admin.product.index'));
    }
   

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $Product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $Product)
    {
     $Product->delete();
     alert()->success('حذف با موفقیت انجام شد','پیغام سیستم')->persistent('تایید');
     return back();

    }
}
