<?php

namespace App\Http\Controllers;

use App\LeaseRules;
use App\Workorder;
use App\workproduct;
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
    public function store( Request $request)
    {
        //if( $request->submit == "workorderbutton")
        //{

        /*
            $this->validate($request, [
                'mechanic' => 'required|max:150',
                'agreements' => 'required|max:150',
                'dateworkorders' => 'required|max:150',
                'failure address' => 'required|max:150',
                'remarksworkorders' => 'required|max:150'
            ]);
        */
            // dd('tussen validate & insert');

        $workerorderId = Workorder::insertGetId([
                'maintenance_id' => $request-> maintenance_id,
                'lease_id' => $request-> lease_id,
                'malfunction_id' => $request-> malfunction_id,
                'mechanic' => $request-> mechanic,
                'agreements' => $request-> agreements,
                'dateworkorders' => $request-> dateworkorders,
                'failureaddress' => $request-> failureaddress,
                'remarksworkorders' => $request-> remarksworkorders,
            ]);

        // aparte insert voor supplies

            foreach ($request->amount as $WorkProductSupplyId => $WorkProductSuppliesAmount) {

                //dd($request->amount);

                //echo $WorkProductSupplyId . "is " . $WorkProductSuppliesAmount . "x besteld. <br>";

                if ($WorkProductSuppliesAmount != null ) {

                    workproduct::insert ([
                        'workorder_id' => $workerorderId,
                        'supply_id' => $WorkProductSupplyId,
                        'amount' => $WorkProductSuppliesAmount,
                    ]);
                }
            }



        return redirect()->route('workorder.create');

        //}
        //else if($request->submit == "plusbutton") {

        //}
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
