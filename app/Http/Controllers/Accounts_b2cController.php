<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Model\Accounts_b2c;
class Accounts_b2cController extends Controller
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
        return Accounts_b2c::all_accounts_b2c();
    }
}