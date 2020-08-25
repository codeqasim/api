<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Model\Acounts_admins;
class admin_accountsController extends Controller
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
        return Acounts_admins::all_acounts_admins();
    }
}