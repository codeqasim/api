<?php

namespace App\Model;
use Illuminate\Database\Eloquent\Model;

class Accounts_b2b extends Model
{

	public $table = "accounts_b2b";
	protected $fillable = [
		// "parent_id",

    ];

      public static function all_accounts_b2b(){
        return Accounts_b2b::get();
    }

}
