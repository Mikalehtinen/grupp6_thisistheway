<?php

namespace App\Http\Controllers;

use App\Admin;
use Illuminate\Http\Request;


class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         // return view('admin');
        $admins = Admin::get();
        return view('admin', ['admins' => $admins]);
    }

    public function show(Admin $admin)
    {
      return view('admin', ['admin' => $admin]);
    }
}
