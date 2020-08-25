<?php

namespace App\Model;
use Illuminate\Database\Eloquent\Model;

class Accounts_b2c extends Model
{

	public $table = "accounts_b2c";
	protected $fillable = [
		// "parent_id",

    ];

      public static function all_accounts_b2c(){
        return Accounts_b2c::get();
    }

}
