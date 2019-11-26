<?php

namespace App\Http\Controllers;

use App\workorder;
use Illuminate\Http\Request;

class WorkorderController extends Controller
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
        return view('Maintenance.workorder');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'bonnumber' => 'required|numeric',
            'project' => 'required|max:50',
            'mechanic' => 'required|max:50',
            'agreements' => 'required|max:50',
            'dateworkorders' => 'required|max:50',
            'failure address' => 'required|max:50',
            'remarksworkorders' => 'required|max:50'
        ]);

        //return $request->all();

        Workorder::insert([
            'bonnumber' => $request-> bonnumber,
            'project' => $request-> project,
            'mechanic' => $request-> mechanic,
            'agreements' => $request-> agreements,
            'dateworkorders' => $request-> dateworkorders,
            'failureaddress' => $request-> failureaddress,
            'remarksworkorders' => $request-> remarksworkorders,
        ]);

        //\Mail::to( \Auth::user() )->send( new \App\Mail\TestMail($request->name) );
        //return ( new \App\Mail\TestMail($request->name) )->render();
        return redirect()->route('workorder.create');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\workorder  $workorder
     * @return \Illuminate\Http\Response
     */
    public function show(workorder $workorder)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\workorder  $workorder
     * @return \Illuminate\Http\Response
     */
    public function edit(workorder $workorder)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\workorder  $workorder
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, workorder $workorder)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\workorder  $workorder
     * @return \Illuminate\Http\Response
     */
    public function destroy(workorder $workorder)
    {
        //
    }
}
