<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\User;
use Spatie\Permission\Models\Role;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use URL;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function __construct()
    {
        $this->middleware('permission:user-list', ['only' => ['index']]);
        $this->middleware('permission:user-create', ['only' => ['create','store']]);
        $this->middleware('permission:user-edit', ['only' => ['edit','update']]);
        $this->middleware('permission:user-delete', ['only' => ['destroy']]);
    }
    public function index()
    {
        $user = User::query();
        if ($keyword = request('search')) {
            $user->where('name', 'LIKE', "%{$keyword}%")->orWhere('family', 'LIKE', "%{$keyword}%");
        }
        $user->where('type' , 'admin');
        $user = $user->latest()->paginate(25);
       return view('Admin.user.index',compact('user'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $roles = Role::get();
        $userRole = array();
        $user = new User;
        $action = URL::route('admin.user.store');
        $title='افزودن کارمند';
        return view('Admin.user.create',compact(['user','action','title','roles','userRole']));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'family' => ['required', 'string', 'max:255'],
            'mobile' => ['required', 'string', 'max:255', 'unique:users'],
            'email'=>['nullable','string'],
            'status'=>['nullable','boolean'],
            'roles' => ['required'],
        ]);
        $user=User::create([
            'name' => $data['name'],
            'family' => $data['family'],
            'password' => Hash::make($data['mobile']),
            'mobile' => faTOen($data['mobile']),
            'email'=> $data['email'],
            'status'=> $data['status'],
            'type'=> 'admin',
        ]);
        $input = $request->all();
        $user->assignRole($request->input('roles'));
     alert()->success('اطلاعات با موفقیت ثبت شد','پیغام سیستم')->persistent("تایید");
     return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        $roles = Role::get();
        $userRole = $user->roles->pluck('name','name')->all();
        $action = URL::route('admin.user.update', ['user' => $user->id]);
        $title='ویرایش کارمند';
        return view('Admin.user.create',compact(['user','action','title','roles','userRole']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        $data = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'family' => ['required', 'string', 'max:255'],
            'mobile' => ['required', 'string', 'max:255'],
            'email'=>['nullable','string'],
            'status'=>['nullable','boolean'],
        ]);

        $user->update([
            'name' => $data['name'],
            'family' => $data['family'],
            'mobile' => faTOen($data['mobile']),
            'email'=>$data['email'],
            'status'=> $data['status'],
        ]);
        $user->syncRoles($request->input('roles'));
        alert()->success('ویرایش  با موفقیت انجام شد','پیغام سیستم')->persistent('تایید');
        return redirect(route('admin.user.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        $user->delete();
        alert()->success('حذف با موفقیت انجام شد','پیغام سیستم')->persistent('تایید');
        return back();
    }
    public function profile()
    {
       return view('Admin.profile.profie');
    }
    public function changepassword()
    {
      return view('Admin.profile.changepassword');
    }
    public function twofactor()
    {
       return view('Admin.profile.twofactor');
    }
}
