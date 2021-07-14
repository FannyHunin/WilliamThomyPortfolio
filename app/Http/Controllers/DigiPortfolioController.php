<?php

namespace App\Http\Controllers;

use App\Models\DigiPortfolio;
use Illuminate\Http\Request;

class DigiPortfolioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = DigiPortfolio::all();
        return view('pages.portfolio.portfolioDigi', compact('items'));
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
     * @param  \App\Models\DigiPortfolio  $digiPortfolio
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $items = DigiPortfolio::find($id);
        return view('pages.portfolio.portfolioDigiShow', compact('items'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\DigiPortfolio  $digiPortfolio
     * @return \Illuminate\Http\Response
     */
    public function edit(DigiPortfolio $digiPortfolio)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\DigiPortfolio  $digiPortfolio
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, DigiPortfolio $digiPortfolio)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\DigiPortfolio  $digiPortfolio
     * @return \Illuminate\Http\Response
     */
    public function destroy(DigiPortfolio $digiPortfolio)
    {
        //
    }
}
