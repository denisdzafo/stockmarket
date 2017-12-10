<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Stock;
use App\Price;
use App\Company;
use App\Market;
use Session;
class StockController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $companies=Company::all();
      $stocks=Stock::all();
      $markets=Market::all();
      $prices=Price::orderBy('value', 'DESC')->get();

        return view('stock.index')->withCompanies($companies)->withStocks($stocks)->withMarkets($markets)->withPrices($prices);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $companies=Company::all();
        return view('stock.create')->withCompanies($companies);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $this->validate($request, array(
          'type'=>'required|max:255',

          'company_id'=>'required|integer'
        ));

      $stock=new Stock;

      $stock->type=$request->type;

      $stock->company_id=$request->company_id;
      $stock->save();
      Session::flash('success', 'Stock has been added');

      return redirect()->route('stock.index');
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
        //
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
        //
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
