<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AllController extends Controller
{
    public function index(){
        return view('pages.portfolio.portfolioAll');
    }
}
