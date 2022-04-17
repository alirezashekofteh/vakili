<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Kavenegar;

class AdminController extends Controller
{

    public function index()
    {
        return view('Admin.index');
        
    }
}
