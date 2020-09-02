<?php

namespace App\Model\globle;

use Illuminate\Database\Eloquent\Model;
class Languages_translations extends Model
{
    public $table = "languages_translations";
    /**
     * The attributes that are mass assignable.
     * 
     * @var array
     */
    protected $fillable = [
        "lang_id",
        "lang_code_id",
        "trans"
    ];

    public static function view_languages_trans()
    {
        return Languages_translations::get();
    }

    public static function add_languages_trans($request){
        Languages_translations::create([
        "lang_id"=>$request->lang_id,
        "lang_code_id"=>$request->lang_code_id,
        "trans"=>$request->trans
        ]);
        return response()->json(['added' => 'true','status'=>'200']);
    }



      public static function update_languages_trans($request){
        $languages_trans_id = Languages_translations::find($request->id);
        // Return error if not found
        if (empty($languages_trans_id)) {
            return response()->json(['updated' => $languages_trans_id == 1,'status'=>'200']);
        }
        Languages_translations::where('id', $languages_trans_id->id)->update([
        "lang_id"=>$request->lang_id,
        "lang_code_id"=>$request->lang_code_id,
        "trans"=>$request->trans
        ]);
    return response()->json(['updated' => 'true','status'=>'200']);
    }

//delete_mod_integrat
    public static function delete_languages_trans($request) {
        $languages_trans_id = Languages_translations::find($request->id);
        if (!empty($languages_trans_id)) {
           $languages_trans_id->delete();
       return response()->json(['deleted' => 'true','status'=>'200']);
        }else{
        return response()->json(['deleted' => $languages_trans_id == 1,'status'=>'200']);
        }
    }
    protected $hidden = ['password'];
}
