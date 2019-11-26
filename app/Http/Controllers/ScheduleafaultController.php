<?php

namespace App\Http\Controllers;

use App\Malfunction;
use Illuminate\Http\Request;

class ScheduleafaultController extends Controller
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
        return view('Maintenance.scheduleafault');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Malfunction  $scheduleafault
     * @return \Illuminate\Http\Response
     */
    public function show(Malfunction $scheduleafault)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Malfunction  $scheduleafault
     * @return \Illuminate\Http\Response
     */
    public function edit(Malfunction $scheduleafault)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Malfunction  $scheduleafault
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Malfunction $scheduleafault)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Malfunction  $scheduleafault
     * @return \Illuminate\Http\Response
     */
    public function destroy(Malfunction $scheduleafault)
    {
        //
    }
}
