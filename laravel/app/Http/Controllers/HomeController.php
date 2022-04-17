<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MainPage;
use App\Models\post;
use App\Models\Slideshow;
use App\Models\Service;
use App\Models\Product;
use App\Models\Category;
use App\Models\Company;
use App\Models\Comment;
use App\Models\NewsLetter;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    /**public function __construct()
    {
        $this->middleware(['auth','verified']);
    }
     */
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
      //  auth()->loginUsingId(1);
        $slideshow = Slideshow::where('active', '1')->get();
        $products = Product::where('active', '1')->latest()->limit(9)->get();
        $company = Company::where('active', '1')->latest()->limit(9)->get();
        $service = Service::where('active', '1')->limit(3)->get();
        $posts = post::where('active', '1')->latest()->limit(3)->get();
        $mainpage = MainPage::first();
         return view('front.index', compact(['slideshow', 'products', 'service', 'posts', 'mainpage', 'company']));
 
}
    public function blogs()
    {
        $posts = post::where('active', '1')->latest()->paginate(30);
        $mainpage = MainPage::first();
        return view('front.blog', compact([ 'posts', 'mainpage']));
    }
    public function catblog(Category $category)
    {
        $cats = $category->child;
        $categories = $category->descendants()->add($category)->pluck('id');
        $posts = Post::whereHas('category', function ($query) use ($categories) {
            return $query->whereIn('id', $categories);
        })->latest()->paginate(16);
        $mainpage = MainPage::first();
        return view('front.blog', compact(['posts', 'cats', 'category']));
    }

    public function service(Service $service)
    {
        $next = $service->next();
        $previous = $service->previous();
        return view('front.service-detail', compact(['service', 'previous', 'next']));
    }
    public function blog(post $post)
    {
        $catblog = Category::where('type','post')->get();
        $next = $post->next();
        $previous = $post->previous();
        return view('front.blog-detail', compact(['post', 'previous', 'next','catblog']));
    }
    public function product(Product $product)
    {
        $catproduct = Category::where('type','product')->get();
        $next = $product->next();
        $previous = $product->previous();
        return view('front.product-detail', compact(['product', 'previous', 'next','catproduct']));
    }
    public function products()
    {
        $products = Product::where('active', '1')->paginate(12);
        return view('front.products', compact(['products']));
    }
    public function services()
    {
        $services = Service::where('active', '1')->latest()->paginate(24);
        return view('front.services', compact(['services']));
    }



    public function catproduct(Category $category)
    {
        $cats = $category->child()->get();
        $categories = $category->descendants()->add($category)->pluck('id');
        $products = Product::whereHas('category', function ($query) use ($categories) {
            return $query->whereIn('id', $categories);
        })->paginate(10);
        return view('front.products', compact(['products']));
    }
    public function contact()
    {
        $mainpage = MainPage::first();
        return view('front.contact',compact('mainpage'));
    }
    public function newsletter(Request $request)
    {
        NewsLetter::create($request->all());
        alert()->success('اطلاعات با موفقیت ثبت شد','پیغام سیستم')->persistent("تایید");
        return back();
    }
    public function comment(Request $request)
    {

        $validData = $request->validate([
            'commentable_id' => 'required',
            'commentable_type' => 'required',
            'parent_id' => 'required',
            'comment' => 'required',
            'name' => 'required',
            'email' => 'required',
            'website' => 'nullable '
        ]);

        Comment::create($validData);
        alert()->success('   نظر شما با موفقیت ثبت شد و پس از تایید در وب سایت نمایش داده می شود', 'پیغام سیستم')->persistent("تایید");
        return back();
    }

}
