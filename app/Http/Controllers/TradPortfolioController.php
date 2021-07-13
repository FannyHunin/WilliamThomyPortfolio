<?php

namespace App\Http\Controllers;

use App\Models\TradPortfolio;
use Illuminate\Http\Request;

class TradPortfolioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index () {
        $items = TradPortfolio::all();
        return view('pages.portfolio.portfolioTrad', compact('items'));
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
     * @param  \App\Models\TradPortfolio  $tradPortfolio
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $items = TradPortfolio::find($id);
        return view('pages.portfolio.portfolioTradShow', compact('items'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\TradPortfolio  $tradPortfolio
     * @return \Illuminate\Http\Response
     */
    public function edit(TradPortfolio $tradPortfolio)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\TradPortfolio  $tradPortfolio
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TradPortfolio $tradPortfolio)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TradPortfolio  $tradPortfolio
     * @return \Illuminate\Http\Response
     */
    public function destroy(TradPortfolio $tradPortfolio)
    {
        //
    }
}
