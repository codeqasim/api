<?php
 
namespace App\Model\b2b;
use Illuminate\Database\Eloquent\Model;

class Accounts_b2b extends Model
{

	public $table = "accounts_b2b";
	protected $fillable = [
		"first_name",
		"last_name",
		"email",
		"password",
		"dob",
		"country",
		"city",
		"address_1",
		"address_2",
		"mobile",
		"postal_code",
		"passport",
		"type",
		"status",
		"verified",
		"permissions",
		"applied_for",
		"commission",
		"wallet_balance"

    ];

      public static function all_accounts_b2b(){
        return Accounts_b2b::get();
    }
      public static function add($request){
         Accounts_b2b::create([
    	"first_name"=>$request->first_name,
		"last_name"=>$request->last_name,
		"email"=>$request->email,
		"password"=>$request->password,
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
		"commission"=>$request->commission,
		"wallet_balance"=>$request->wallet_balance
        ]);
        return response()->json(['added' => 'true','status'=>'200']);
    }

        public static function del($request) {
        $Accounts_b2b_id = Accounts_b2b::find($request->id);
        if (!empty($Accounts_b2b_id)) {
           $Accounts_b2b_id->delete();
       return response()->json(['deleted' => 'true','status'=>'200']);
        }else{
    	return response()->json(['deleted' => $Accounts_b2b_id == 1,'status'=>'200']);
        }
    }

      	public static function Accounts_b2b_update($request){
  		$Accounts_b2b_id = Accounts_b2b::find($request->id);
  		// Return error if not found
        if (empty($Accounts_b2b_id)) {
            return response()->json(['updated' => $Accounts_b2b_id == 1,'status'=>'200']);
        }
        // Update the Accounts_b2b
         Accounts_b2b::where('id', $Accounts_b2b_id->id)->update([
    	"first_name"=>$request->first_name,
		"last_name"=>$request->last_name,
		"email"=>$request->email,
		"password"=>$request->password,
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
		"commission"=>$request->commission,
		"wallet_balance"=>$request->wallet_balance
        ]);
        return response()->json(['updated' => 'true','status'=>'200']);
    }

}
