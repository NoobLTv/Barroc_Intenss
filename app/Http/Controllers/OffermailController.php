<?php

namespace App\Http\Controllers;

use App\lease;
use App\offermail;
use App\Quotation;
use Illuminate\Http\Request;

class OffermailController extends Controller
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
        return view('Sales.offermail');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $quotation_id = $request->get('quotation_id');

        //dd($quotation_id);
        // dd($request);

        // in de request staat een quotation_id;

        return (new \App\Mail\OfferMail($request, $quotation_id) ); // stuur e-mail, maar geef quotation_id mee


        //return redirect()->route('offermail.create');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\offermail  $offermail
     * @return \Illuminate\Http\Response
     */
    public function show( $id )
    {
        $quotation = Quotation::find($id);

        return view('Sales.offershow', ['quotation' => $quotation]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\offermail  $offermail
     * @return \Illuminate\Http\Response
     */
    public function edit(offermail $offermail)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\offermail  $offermail
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, offermail $offermail)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\offermail  $offermail
     * @return \Illuminate\Http\Response
     */
    public function destroy(offermail $offermail)
    {
        //
    }
}
