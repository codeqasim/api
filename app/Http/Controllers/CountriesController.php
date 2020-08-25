<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Model\Countries;
class CountriesController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }
        //show all record
        public function view()
    {
        return Countries::all_countries();
    }
}