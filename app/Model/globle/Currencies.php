<?php

namespace App\Model\globle;

use Illuminate\Database\Eloquent\Model;
class Currencies extends Model
{
    public $table = "currencies";
    /**
     * The attributes that are mass assignable.
     * 
     * @var array
     */
    protected $fillable = [
        "name",
        "symbol",
        "code",
        "rate",
        "decimals",
        "placement",
        "order",
        "default",
        "active"
    ];


    public static function view_currencies()
    {
        return Currencies::get();
    }

    public static function add_currencies($request){
        Currencies::create([
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

//delete_mod_integrat
    public static function delete_currencies($request) {
        $currencies_id = Currencies::find($request->id);
        if (!empty($currencies_id)) {
           $currencies_id->delete();
       return response()->json(['deleted' => 'true','status'=>'200']);
        }else{
        return response()->json(['deleted' => $currencies_id == 1,'status'=>'200']);
        }
    }
    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = ['password)'];
}
