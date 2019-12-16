<?php

namespace App\Http\Controllers;

use App\Companydetail;
use App\lease;
use App\LeaseRules;
use App\Malfunction;
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
        $leases = lease::all();
        return view('Finance/leasesindex', ['leases' => $leases]);
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
        //dd($request->all());
        //$customer = \App\companydetail::where('user_id', $request->customer_id)->first();

        $details = \App\companydetail::select('id', 'must_still_approve', 'approved')->where('must_still_approve', '1')->where('approved', '0')->get();
        $detailsfirst = \App\companydetail::select('id', 'must_still_approve', 'approved')->where('must_still_approve', '1')->where('approved', '1')->get();
//        dd($customer);
        //if ($customer->must_still_approve == 1 && $customer->approved == 0 || $customer->must_still_approve == 0 and $customer->approved == 0  ) {
            //return view('Finance/error');
        //}
       //else if ($customer->must_still_approve == 1 && $customer->approved == 1 ){

            $leaseId = lease::insertGetId([
           'lease_type_id' => $request->lease_type_id,
           'customer_id' => $request->customer_id,
            'finance_id' => $request->finance_id,
            'startdate' => $request->startdate,
           'enddate' => $request->enddate,
            'connectioncosts' => $request->connectioncosts,
            'noticeperiod' => $request->noticeperiod,
        ]);

        foreach ($request->amount as $leaseSupplyId => $amountOrdered) {

            //echo $leaseSupplyId . "is " . $amountOrdered . "x besteld. <br>";

            if ($amountOrdered != null) {
                LeaseRules::insert([
                    'lease_id' => $leaseId,
                    'leasesupplies_id' => $leaseSupplyId,
                    'amount' => $amountOrdered,
                ]);
            }
        }


        //dd();

            return redirect()->route('lease.create');

       //}

                // dd($request);
                //$this->validate($request, [
                //'connectioncosts' => 'required|numeric',
                //'noticeperiod' => 'required|numeric'
                //]);

                // dd($request->amount);

                //$companydetail = companydetail::where('customer_id',$request->customer_id);
                //dd($companydetail);

        //

    }


    /**
     * Display the specified resource.
     *
     * @param  \App\lease  $lease
     * @return \Illuminate\Http\Response
     */

    public function show($id)
    {
        $leases = lease::find($id);

        return view('Finance/leasesshow', ['leases' => $leases]);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\lease  $lease
     * @return \Illuminate\Http\Response
     */
    public function edit(lease $lease)
    {

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
