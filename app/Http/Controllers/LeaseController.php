<?php

namespace App\Http\Controllers;

use App\Companyname;
use App\lease;
use App\LeaseRules;
use Illuminate\Http\Request;

class LeaseController extends Controller
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
        return view('Finance.lease');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        // dd($request);
        //$this->validate($request, [
            //'connectioncosts' => 'required|numeric',
            //'noticeperiod' => 'required|numeric'
        //]);

        // dd($request->amount);

        $leaseId = lease::insertGetId([
            'lease_type_id' => $request-> lease_type_id,
            'customer_id' => $request-> customer_id,
            'finance_id' => $request-> finance_id,
            'startdate' => $request-> startdate,
            'enddate' => $request-> enddate,
            'connectioncosts' => $request-> connectioncosts,
            'noticeperiod' => $request-> noticeperiod,
        ]);

        foreach($request->amount as $leaseSupplyId => $amountOrdered ) {

            //echo $leaseSupplyId . "is " . $amountOrdered . "x besteld. <br>";

            if ($amountOrdered != null ) {
                LeaseRules::insert ([
                    'lease_id' => $leaseId,
                    'leasesupplies_id' => $leaseSupplyId,
                    'amount' => $amountOrdered,
                ]);
            }
        }

        //dd();

        return redirect()->route('lease.create');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\lease  $lease
     * @return \Illuminate\Http\Response
     */
    public function show(lease $lease)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\lease  $lease
     * @return \Illuminate\Http\Response
     */
    public function edit(lease $lease)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\lease  $lease
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, lease $lease)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\lease  $lease
     * @return \Illuminate\Http\Response
     */
    public function destroy(lease $lease)
    {
        //
    }
}
