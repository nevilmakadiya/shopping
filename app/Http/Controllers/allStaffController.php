<?php

namespace App\Http\Controllers;

use App\Models\allStaff;
use Illuminate\Http\Request;

class allStaffController extends Controller
{
    // Staff
    public function addStaff()
    {
        return view('admin.addStaff');
    }

    // addStaff
    public function addNewStaff(Request $request)
    {
        $result = new allStaff;
        $result->firstName = $request->input('firstName');
        $result->lastName = $request->input('lastName');
        $result->email = $request->input('email');
        $result->contact = $request->input('contact');
        $result->status = $request->input('status');
        $result->role = $request->input('role');
        // $result->permission = $request->input('permission');
        $result->save();

        return redirect('addStaff')->with('done', 'New Staff member added');
    }

    // manageStaff
    public function manageStaff()
    {
        return view('admin.manageStaff')->with('staffArray', allStaff::all());
    }

    // public function addNewStaff(Request $request)
    // {
    //     $result = new allStaffController;
    //     $result->firstName = $request->input('firstName');
    //     $result->lastName = $request->input('lastName');
    //     $result->email = $request->input('email');
    //     $result->status = $request->input('contact');
    //     $result->role = $request->input('role');
    //     $result->permission = $request->input('permission');
    //     // $result->save();

    //     return redirect('/addStaff')->with('done', 'New Staff Member Added');
    // }

    // // manageStaff
    // public function manageStaff(allStaffController $allStaffController)
    // {
    //     return view('admin.manageStaff')->with('carArray', allStaffController::all());
    // }
}
