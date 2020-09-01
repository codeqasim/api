<?php

namespace App\Model\globle;

use Illuminate\Database\Eloquent\Model;
class Languages extends Model
{
    public $table = "Languages";
    /**
     * The attributes that are mass assignable.
     * 
     * @var array
     */
    protected $fillable = [
        "name",
        "country_id",
        "code",
        "dir",
        "status", 
        "default"
    ];



    public static function view_languages()
    {
        return Languages::get();
    }

    public static function add_languages($request){
        Languages::create([
        "name"=>$request->name,
        "country_id"=>$request->country_id,
        "code"=>$request->code,
        "dir"=>$request->dir,
        "status"=>$request->status,
        "default"=>$request->default
        ]);
        return response()->json(['added' => 'true','status'=>'200']);
    }



      public static function update_languages($request){
        $languages_id = Languages::find($request->id);
        // Return error if not found
        if (empty($languages_id)) {
            return response()->json(['updated' => $languages_id == 1,'status'=>'200']);
        }
        Languages::where('id', $languages_id->id)->update([
        "name"=>$request->name,
        "country_id"=>$request->country_id,
        "code"=>$request->code,
        "dir"=>$request->dir,
        "status"=>$request->status,
        "default"=>$request->default
        ]);
    return response()->json(['updated' => 'true','status'=>'200']);
    }

//delete_mod_integrat
    public static function delete_languages($request) {
        $languages_id = Languages::find($request->id);
        if (!empty($languages_id)) {
           $languages_id->delete();
       return response()->json(['deleted' => 'true','status'=>'200']);
        }else{
        return response()->json(['deleted' => $languages_id == 1,'status'=>'200']);
        }
    }
    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = ['password'];
}
