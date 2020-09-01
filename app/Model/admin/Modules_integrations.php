<?php
namespace App\Model\admin;

use Illuminate\Database\Eloquent\Model;

class Modules_integrations extends Model
{
public $table = "Modules_integrations";
protected $fillable = [
		"modules_id",
		"name",
		"status",
		"order",
		"markup_b2c",
		"markup_b2b",
		"markup_b2e",
		"c1",
		"c2",
		"c3",
		"c4",
		"c5",
		"c6",
		"c7",
		"c8",
		"c9",
		"c10",
    ];

      public static function view_modules_integrate(){
     	return Modules_integrations::get();
    }


      public static function add_mod_integrat($request){
     	Modules_integrations::create([
        "modules_id"=>$request->modules_id,
        "name"=>$request->name,
        "status"=>$request->status,
        "order"=>$request->order,
        "markup_b2c"=>$request->markup_b2c,
        "markup_b2b"=>$request->markup_b2b,
        "markup_b2e"=>$request->markup_b2e,
        "c1"=>$request->c1,
        "c2"=>$request->c2,
        "c3"=>$request->c3,
        "c4"=>$request->c4,
        "c5"=>$request->c5,
        "c6"=>$request->c6,
        "c7"=>$request->c7,
        "c8"=>$request->c8,
        "c9"=>$request->c9,
        "c10"=>$request->c10
        ]);
        return response()->json(['added' => 'true','status'=>'200']);
    }

      public static function update_mod_integrat($request){
      	$mod_integrat_id = Modules_integrations::find($request->id);
  		// Return error if not found
        if (empty($mod_integrat_id)) {
            return response()->json(['updated' => $mod_integrat_id == 1,'status'=>'200']);
        }
     	Modules_integrations::where('id', $mod_integrat_id->id)->update([
        "modules_id"=>$request->modules_id,
        "name"=>$request->name,
        "status"=>$request->status,
        "order"=>$request->order,
        "markup_b2c"=>$request->markup_b2c,
        "markup_b2b"=>$request->markup_b2b,
        "markup_b2e"=>$request->markup_b2e,
        "c1"=>$request->c1,
        "c2"=>$request->c2,
        "c3"=>$request->c3,
        "c4"=>$request->c4,
        "c5"=>$request->c5,
        "c6"=>$request->c6,
        "c7"=>$request->c7,
        "c8"=>$request->c8,
        "c9"=>$request->c9,
        "c10"=>$request->c10
        ]);
    return response()->json(['updated' => 'true','status'=>'200']);
    }

//delete_mod_integrat
    public static function delete_mod_integrat($request) {
        $mod_integrat_id = Modules_integrations::find($request->id);
        if (!empty($mod_integrat_id)) {
           $mod_integrat_id->delete();
       return response()->json(['deleted' => 'true','status'=>'200']);
        }else{
    	return response()->json(['deleted' => $mod_integrat_id == 1,'status'=>'200']);
        }
    }


    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = ['created_at','updated_at'];
}

