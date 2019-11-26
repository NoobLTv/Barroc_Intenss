<?php

namespace App\Http\Controllers;

use App\Malfunction;
use Illuminate\Http\Request;

class ScheduleafaultshowController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $malfunctions = Malfunction::all();
        return view('Maintenance.scheduleafaultshow', ['malfunctions' => $malfunctions ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\scheduleafaultshow  $scheduleafaultshow
     * @return \Illuminate\Http\Response
     */
    public function show(scheduleafaultshow $scheduleafaultshow)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\scheduleafaultshow  $scheduleafaultshow
     * @return \Illuminate\Http\Response
     */
    public function edit(scheduleafaultshow $scheduleafaultshow)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\scheduleafaultshow  $scheduleafaultshow
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, scheduleafaultshow $scheduleafaultshow)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\scheduleafaultshow  $scheduleafaultshow
     * @return \Illuminate\Http\Response
     */
    public function destroy(scheduleafaultshow $scheduleafaultshow)
    {
        //
    }
}
