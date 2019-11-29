<?php

namespace App\Http\Controllers;

use App\supplies;
use Illuminate\Http\Request;

class suppliesController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function filter(Request $request){
        $btn = $_POST['submitbtn'];
        if($btn == "clear"){
            $supplises = supplies::all();
            return view('supplies.index', ['supplies' => $supplises]);
        }

        $name = $request->input('name');
        $supplises = supplies::where('name')
            ->orWhere('name', 'like', '%' . $name . '%')->get();

        $checkbox_stock = $request->input('enough', false);
        if($checkbox_stock == 'to-little'){
            $supplises = supplies::where('available')
                ->onWhere('available' , '>', 3)->get();
        }

        if($checkbox_stock == 'enough'){
            $supplises = supplies::where('available')
                ->orWhere('available', '>', 3)->get();
        }

        return view('supplies.index', ['supplies' => $supplises]);
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $supplies = supplies::paginate(10);
        return view('Supplies.index', ['supplies' => $supplies]);
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $supplises = supplies::find($id);

        return view('Supplies.edit', ['supplises' => $supplises]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $supplises = supplies::find($id);

        $supplises->update([
            'name'      =>$request->name,
            'price'     =>$request->price,
            'units'     =>$request->units
        ]);

        return redirect()->route('Supplies.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
