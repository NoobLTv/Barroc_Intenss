<?php

namespace App\Http\Controllers;

use App\CustomerDetail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class customerdetailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();
        //$customerDetail = \App\CustomerDetail::where('user_id', auth()->user()->id)->get();
        return view('Customer/index', ['user' => $user]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Customer/customerdetail');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        \App\CustomerDetail::insert([
            'contactperson_name'        => $request->contactPersonName,
            'contactperson_email'       => $request->contactPersonEmail,
            'contactperson_number'      => $request->contactPersonNumber,
            'companyname'               => $request->companyName,
            'companyemail'              => $request->companyEmail,
            'companynumber'             => $request->companyNumber,
            'adres'                     => $request->adres,
            'postalcode'                => $request->postalCode,
            'city'                      => $request->city,
        ]);

        return redirect('home');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = Auth::user();
       //  = \App\CustomerDetail::where('user_id', $id)->get();
        return view('Customer/customerdetailedit' , ['user' => $user]);


    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $user = Auth::user();
        $user->update([
           'name' => $request->contactPersonName,
           'email' => $request->contactPersonEmail
        ]);
        $user->CustomerDetail->update([
           'companyname' => $request->companyName,
            'companyemail' => $request->companyEmail,
            'companynumber' => $request->companyNumber,
            'adres' => $request->adres,
            'postalcode' => $request->postalCode,
            'city' => $request->city
        ]);
        return redirect('home');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
