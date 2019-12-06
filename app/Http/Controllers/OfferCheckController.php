<?php

namespace App\Http\Controllers;

use App\Companydetail;
use App\Quotation;
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
        return view('Finance.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        // $categories = Category::all();
        // roles = Role::all();
       // dd($roles);

        $quotations = Quotation::all();
        // dd($quotations);

        return view('Finance.offercheck', ['quotations'=> $quotations]);
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
            Quotation::insert([
                'sales_id' => $request-> sales_id,
                'customer_id' => $request-> customer_id,
                'price' => $request-> price,
                'remarks' => $request-> remarks,
                'must_still_approve' => 1,
                'approved' => 1
            ]);

            return redirect()->route('offercheck.create');
        }
        else if ($request->input ('disapprovedcheckbox'))
        {
            Quotation::insert([
                'sales_id' => $request-> sales_id,
                'customer_id' => $request-> customer_id,
                'price' => $request-> price,
                'remarks' => $request-> remarks,
                'must_still_approve' => 1,
                'approved' => 0
            ]);

            return redirect()->route('offercheck.create');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\OfferCheck  $offerCheck
     * @return \Illuminate\Http\Response
     */
    public function show(OfferCheck $offerCheck)
    {
        return view('Finance.show');
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
