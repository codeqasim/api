<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Model\Accounts_b2b;
class Accounts_b2bController extends Controller
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
        return Accounts_b2b::all_accounts_b2b();
    }
}