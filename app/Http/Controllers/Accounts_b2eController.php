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

        //Add new Accounts_b2e record
        public function add(Request $request) {
        $this->validate($request, [
        "first_name"=> "required",
        "last_name"=> "required",
        "email"=> "required|email|unique:accounts_b2e",
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
        "commission"=> "required",
        "wallet_balance"=> "required"
         ]);
        return Accounts_b2e::add($request);

    }
    //delete Accounts_b2e record
    public function delete(Request $request)
    {
        return Accounts_b2e::del($request);
    }
        //update Accounts_b2e record
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
        "commission"=> "required",
        "wallet_balance"=> "required"
         ]);
        return Accounts_b2e::Accounts_b2e_update($request);
        
    }
}