<?php
 
namespace App\Http\Controllers\b2c;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\b2c\Accounts_b2c;
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
        //Add new Accounts_b2c record
        public function add(Request $request) {
        $this->validate($request, [
        "first_name"=> "required",
        "last_name"=> "required",
        "email"=> "required|email|unique:accounts_b2c",
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
        return Accounts_b2c::add($request);
    }
    //delete Accounts_b2c record
    public function delete(Request $request)
    {
        return Accounts_b2c::del($request);
    }
        //update Accounts_b2c record
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
        return Accounts_b2c::Accounts_b2c_update($request);
        
    }
}