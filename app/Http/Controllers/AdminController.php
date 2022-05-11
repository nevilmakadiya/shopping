<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    // main dashboard
    // public function mainDashboard()
    // {
    //     return view('admin.dashboard');
    // }

    // adminLogin Page
    public function adminLogin()
    {
        return view('admin.adminLogin');
    }

    // doAdminLogin
    public function doAdminLogin(Request $request)
    {
        $username = $request->post('username');
        $password = $request->post('password');

        $result = Admin::where([
            'username' => $username,
            'password' => $password
        ])->get();

        if (isset($result['0']->id)) {
            $request->session()->put('Admin_Login', true);
            $request->session()->put('Admin_Id', $result['0']->id);
            return redirect('/adminDashboard');
        } else {
            return redirect('/adminLogin')->with('message', 'Invalid Login Details');
        }
    }

    // admin Dashboard
    public function index()
    {
        return view('admin.index');
    }
}
