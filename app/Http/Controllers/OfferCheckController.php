<?php

namespace App\Http\Controllers;

use App\OfferCheck;
use Illuminate\Http\Request;

class OfferCheckController extends Controller
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
        return view('Finance.offercheck');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        OfferCheck::insert([
            'must_still_approve' => 1,
            'approved' => 1
        ]);

        return redirect()->route('offercheck.create');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\OfferCheck  $offerCheck
     * @return \Illuminate\Http\Response
     */
    public function show(OfferCheck $offerCheck)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\OfferCheck  $offerCheck
     * @return \Illuminate\Http\Response
     */
    public function edit(OfferCheck $offerCheck)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\OfferCheck  $offerCheck
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, OfferCheck $offerCheck)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\OfferCheck  $offerCheck
     * @return \Illuminate\Http\Response
     */
    public function destroy(OfferCheck $offerCheck)
    {
        //
    }
}
