<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    // main Dashboard
    // public function mainDashboard()
    // {
    //     return view('user.dashboard');
    // }

    // userLogin Page
    public function userLogin()
    {
        return view('user.userLogin');
    }

    // doUserLogin
    public function doUserLogin(Request $request)
    {
        $username = $request->post('username');
        $password = $request->post('password');

        $result = Client::where([
            'username' => $username,
            'password' => $password
        ])->get();

        if (isset($result['0']->id)) {
            $request->session()->put('User_Login', true);
            $request->session()->put('User_Id', $result['0']->id);
            return redirect('/');
        } else {
            return redirect('/userLogin')->with('message', 'Invalid Login Details');
        }
    }

    // user Dashboard
    public function index()
    {
        return view('user.index');
    }
}
