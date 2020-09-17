<?php

namespace App\Model\admin;
use Illuminate\Database\Eloquent\Model;

class Accounts_admins extends Model
{

	public $table = "accounts_admins";
	protected $fillable = [
		"first_name",
		"last_name",
		"email",
		"password"
    ];

      public static function all_acounts_admins(){
        return Accounts_admins::get();
    }

     public static function add($request){
         Accounts_admins::create([
    	"first_name"=>$request->first_name,
		"last_name"=>$request->last_name,
		"email"=>$request->email,
		"password"=>md5($request->password),
		"dob"=>$request->dob,
		"country"=>$request->country,
		"city"=>$request->city,
		"address_1"=>$request->address_1,
		"address_2"=>$request->address_2,
		"mobile"=>$request->mobile,
		"postal_code"=>$request->postal_code,
		"passport"=>$request->passport,
		"type"=>$request->type,
		"status"=>$request->status,
		"verified"=>$request->verified,
		"permissions"=>$request->permissions,
		"applied_for"=>$request->applied_for,
		"commission"=>$request->commission
        ]);
        return response()->json(['added' => 'true','status'=>'200']);
    }

        public static function del($request) {
        $Acounts_admins_id = Accounts_admins::find($request->id);
        if (!empty($Acounts_admins_id)) {
           $Acounts_admins_id->delete();
       return response()->json(['deleted' => 'true','status'=>'200']);
        }else{
    	return response()->json(['deleted' => $Acounts_admins_id == 1,'status'=>'200']);
        }
    }

      	public static function Acounts_admins_update($request){
  		$Acounts_admins_id = Accounts_admins::find($request->id);
  		// Return error if not found
        if (empty($Acounts_admins_id)) {
            return response()->json(['updated' => $Acounts_admins_id == 1,'status'=>'200']);
        }
        // Update the Accounts_admins
         Accounts_admins::where('id', $Acounts_admins_id->id)->update([
    	"first_name"=>$request->first_name,
		"last_name"=>$request->last_name,
		"email"=>$request->email,
		"password"=>md5($request->password),
		"dob"=>$request->dob,
		"country"=>$request->country,
		"city"=>$request->city,
		"address_1"=>$request->address_1,
		"address_2"=>$request->address_2,
		"mobile"=>$request->mobile,
		"postal_code"=>$request->postal_code,
		"passport"=>$request->passport,
		"type"=>$request->type,
		"status"=>$request->status,
		"verified"=>$request->verified,
		"permissions"=>$request->permissions,
		"applied_for"=>$request->applied_for,
		"commission"=>$request->commission
        ]);
        return response()->json(['updated' => 'true','status'=>'200']);
    }


     public static function checklogin($request) {
      $email = $request->post('email');
      $password = $request->post('password');
      $admin = Accounts_admins::where('email', $email)->where('password', md5($password))->first();
      if($admin) {
        // return response()->json($admin, 200);
        return response()->json(['message' =>  200]);
      }
      return response()->json(['message' => 404]);
     }

}
