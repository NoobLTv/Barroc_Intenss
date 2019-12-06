<?php

namespace App\Http\Controllers;

use App\Companydetail;
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
            Companydetail::insert([
                'user_id' => $request-> user_id,
                'must_still_approve' => 1,
                'approved' => 1
            ]);

            return redirect()->route('bkrcheck.create');
        }
        else if ($request->input ('disapprovedcheckbox'))
        {
            Companydetail::insert([
                'user_id' => $request-> user_id,
                'must_still_approve' => 1,
                'approved' => 0
            ]);

            return redirect()->route('bkrcheck.create');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Companydetail  $companyname
     * @return \Illuminate\Http\Response
     */
    public function show(Companydetail $companyname)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Companydetail  $companyname
     * @return \Illuminate\Http\Response
     */
    public function edit(Companydetail $companyname)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Companydetail  $companyname
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Companydetail $companyname)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Companydetail  $companyname
     * @return \Illuminate\Http\Response
     */
    public function destroy(Companydetail $companyname)
    {
        //
    }
}
