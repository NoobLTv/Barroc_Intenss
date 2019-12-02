<?php

namespace App\Http\Controllers;

use App\Companyname;
use App\Workorder;
use Illuminate\Http\Request;

class BkrCheckController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Finance.bkrcheck');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if ($request->input ('approvedcheckbox'))
        {
            $this->validate($request, [
                'companyname' => 'required|max:150'
            ]);

            Companyname::insert([
                'user_id' => $request-> user_id,
                'companyname' => $request-> companyname,
                'must_still_approve' => 1,
                'approved' => 1
            ]);

            return redirect()->route('bkrcheck.create');
        }
        else if ($request->input ('disapprovedcheckbox'))
        {
            $this->validate($request, [
                'companyname' => 'required|max:150'
            ]);

            Companyname::insert([
                'user_id' => $request-> user_id,
                'companyname' => $request-> companyname,
                'must_still_approve' => 1,
                'approved' => 0
            ]);

            return redirect()->route('bkrcheck.create');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Companyname  $companyname
     * @return \Illuminate\Http\Response
     */
    public function show(Companyname $companyname)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Companyname  $companyname
     * @return \Illuminate\Http\Response
     */
    public function edit(Companyname $companyname)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Companyname  $companyname
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Companyname $companyname)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Companyname  $companyname
     * @return \Illuminate\Http\Response
     */
    public function destroy(Companyname $companyname)
    {
        //
    }
}
