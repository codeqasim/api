<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Model\Acounts_admins; 
class Admin_accountsController extends Controller
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
//Add new Accounts_b2c record
        public function add(Request $request) {
        $this->validate($request, [
        "first_name"=> "required",
        "last_name"=> "required",
        "email"=> "required|email|unique:acounts_admins",
        "password"=> "required",
        "dob"=> "required",
        "country"=> "required",
        "city"=> "required",
        "address_1"=> "required",
        "address_2"=> "required",
        "mobile"=> "required",
        "postal_code"=> "required",
        "passport"=> "required",
        "type"=> "required",
        "status"=> "required",
        "verified"=> "required",
        "permissions"=> "required",
        "applied_for"=> "required",
        "commission"=> "required"
         ]);
        return Acounts_admins::add($request);

    }
    //delete Acounts_admins record
    public function delete(Request $request)
    {
        return Acounts_admins::del($request);
    }
        //update Acounts_admins record
    public function update(Request $request) {
        $this->validate($request, [
        "first_name"=> "required",
        "last_name"=> "required",
        "email"=> "required|email",
        "password"=> "required",
        "dob"=> "required",
        "country"=> "required",
        "city"=> "required",
        "address_1"=> "required",
        "address_2"=> "required",
        "mobile"=> "required",
        "postal_code"=> "required",
        "passport"=> "required",
        "type"=> "required",
        "status"=> "required",
        "verified"=> "required",
        "permissions"=> "required",
        "applied_for"=> "required",
        "commission"=> "required"
         ]);
        return Acounts_admins::Acounts_admins_update($request);
        
    }
}