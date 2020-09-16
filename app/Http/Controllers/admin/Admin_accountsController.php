<?php

namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\admin\Accounts_admins; 
use DB;
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
        return Accounts_admins::all_acounts_admins();
    }
//Add new Accounts_b2c record
        public function add(Request $request) {
        $this->validate($request, [
        "first_name"=> "required",
        "last_name"=> "required",
        "email"=> "required|email|unique:accounts_admins",
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
        return Accounts_admins::add($request);

    }
    //delete Accounts_admins record
    public function delete(Request $request)
    {
        return Accounts_admins::del($request);
    }
        //update Accounts_admins record
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
        return Accounts_admins::Acounts_admins_update($request);
        
    }
  
         //Authenticate the admin
    public function checklogin(Request $request) {
     $this->validate($request, [
      'email'   => 'required|email',
      'password'  => 'required'
      // 'password'  => 'required|alphaNum|min:3'
     ]);
     return Accounts_admins::checklogin($request);
    }
}