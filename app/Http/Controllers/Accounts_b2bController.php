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
        public function view(){
        return Accounts_b2b::all_accounts_b2b();
    }

        //Add new Accounts_b2b record
        public function add(Request $request) {
        $this->validate($request, [
        "first_name"=> "required",
        "last_name"=> "required",
        "email"=> "required|email|unique:accounts_b2b",
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
        return Accounts_b2b::add($request);

    }
    //delete Accounts_b2b record
    public function delete(Request $request)
    {
        return Accounts_b2b::del($request);
    }
        //update Accounts_b2b record
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
        return Accounts_b2b::Accounts_b2b_update($request);
        
    }
}