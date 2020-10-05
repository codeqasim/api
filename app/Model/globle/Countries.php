<?php 

namespace App\Model\globle;
use Illuminate\Database\Eloquent\Model;

class Countries extends Model
{

	public $table = "Countries";
	// protected $fillable = [
	// 	"parent_id",

 //    ];

      public static function all_countries(){
        return Countries::get();
    }

}
