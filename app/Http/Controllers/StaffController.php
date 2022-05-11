<?php

namespace App\Http\Controllers;

use App\Models\Staff;
use Illuminate\Http\Request;

class StaffController extends Controller
{

    // staffLogin Page
    public function staffLogin()
    {
        return view('staff.staffLogin');
    }

    // doStaffLogin
    public function doStaffLogin(Request $request)
    {
        $username = $request->post('username');
        $password = $request->post('password');

        $result = Staff::where([
            'username' => $username,
            'password' => $password
        ])->get();

        if (isset($result['0']->id)) {
            $request->session()->put('Staff_Login', true);
            $request->session()->put('Staff_Id', $result['0']->id);
            return redirect('/staffDashboard');
        } else {
            return redirect('/staffLogin')->with('message', 'Invalid Login Details');
        }
    }

    // staff Dashboard
    public function index()
    {
        return view('staff.index');
    }
}
