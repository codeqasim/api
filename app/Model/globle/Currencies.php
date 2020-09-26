<?php

namespace App\Model\globle;

use Illuminate\Database\Eloquent\Model;
use DB;
class Currencies extends Model
{
    public $table = "currencies";
    /**
     * The attributes that are mass assignable.
     * 
     * @var array
     */
    protected $fillable = [
        "country_id",
        "name",
        "symbol",
        "code",
        "rate",
        "decimals",
        "placement",
        "order",
        "default",
        "active",
        "featured"
    ];


    public static function view_currencies()
    {
        return Currencies::get();
    }

    public static function add_currencies($request){
        Currencies::create([
        "country_id"=>$request->country_id,
        "name"=>$request->name,
        "symbol"=>$request->symbol,
        "code"=>$request->code,
        "rate"=>$request->rate,
        "decimals"=>$request->decimals,
        "placement"=>$request->placement,
        "order"=>$request->order,
        "default"=>$request->default,
        "active"=>$request->active
        ]);
        return response()->json(['added' => 'true','status'=>'200']);
    }



      public static function update_currencies($request){
        $currencies_id = Currencies::find($request->id);
        // Return error if not found
        if (empty($currencies_id)) {
            return response()->json(['updated' => $currencies_id == 1,'status'=>'200']);
        }
        Currencies::where('id', $currencies_id->id)->update([
        "country_id"=>$request->country_id,
        "name"=>$request->name,
        "symbol"=>$request->symbol,
        "code"=>$request->code,
        "rate"=>$request->rate,
        "decimals"=>$request->decimals,
        "placement"=>$request->placement,
        "order"=>$request->order,
        "default"=>$request->default,
        "active"=>$request->active
        ]);
    return response()->json(['updated' => 'true','status'=>'200']);
    }

//delete_currencies
    public static function delete_currencies($request) {
        $ids= explode(",", $request->ids);
        $currencies_id = Currencies::find($ids);
        if (count($currencies_id) != 0) {
        DB::table("currencies")->whereIn('id',$currencies_id)->delete();
       return response()->json(['deleted' => 'true','status'=>'200']);
        }else{
        return response()->json(['deleted' => 'false','status'=>'200']);
        }
    }
    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = ['password)'];
}
