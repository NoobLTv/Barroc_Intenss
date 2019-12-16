<?php

namespace App\Http\Controllers;

use App\Workorder;
use App\workordermail;
use App\workproduct;
use Illuminate\Http\Request;

class WorkordermailController extends Controller
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
        return view('Maintenance.workordermail');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $workorder_id = $request->get('workorder_id');
        $workorderproduct_id = $request->get('workorderproduct_id');
        //echo '$workorder_id: ' . $workorder_id;
        //dd($request);


        // in de request staat een quotation_id;

        return (new \App\Mail\workordermail($request, $workorder_id, $workorderproduct_id  ) );
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\workordermail  $workordermail
     * @return \Illuminate\Http\Response
     */
    public function show( $id)
    {
        $workorder_id = Workorder::find($id);
        $workordersproduct_id = workproduct::find($id);

        return view('Maintenance.workordershow', ['workorder' => $workorder_id], ['workproduct' => $workordersproduct_id]);
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\workordermail  $workordermail
     * @return \Illuminate\Http\Response
     */
    public function edit(workordermail $workordermail)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\workordermail  $workordermail
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, workordermail $workordermail)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\workordermail  $workordermail
     * @return \Illuminate\Http\Response
     */
    public function destroy(workordermail $workordermail)
    {
        //
    }
}
