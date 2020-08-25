<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Model\Accounts_b2e;
class Accounts_b2eController extends Controller
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
        return Accounts_b2e::all_accounts_b2e();
    }
}