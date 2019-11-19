<?php

namespace App\Http\Controllers;

use App\quotations;
use Illuminate\Http\Request;

class QuotationsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        return "dit is de index!";
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // return "Dit is de create";
        return view('Sales.offer');
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
            'price' => 'required|numeric',
            'remarks' => 'required|max:50'
        ]);

        quotations::insert([
            'price' => $request->price,
            'remarks' => $request->remarks
        ]);

        //\Mail::to( \Auth::user() )->send( new \App\Mail\TestMail($request->name) );
        //return ( new \App\Mail\TestMail($request->name) )->render();
        return redirect()->route('Sales.offer');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\quotations  $quotations
     * @return \Illuminate\Http\Response
     */
    public function show(quotations $quotations)
    {
        //

        return "Dit is de show";
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\quotations  $quotations
     * @return \Illuminate\Http\Response
     */
    public function edit(quotations $quotations)
    {
        //

        return "Dit is de edit";
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\quotations  $quotations
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, quotations $quotations)
    {
        //
        return "Dit is de update";
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\quotations  $quotations
     * @return \Illuminate\Http\Response
     */
    public function destroy(quotations $quotations)
    {
        //
        return "Dit is de destroy";
    }
}
