<?php

namespace App\Model;
use Illuminate\Database\Eloquent\Model;

class Accounts_b2e extends Model
{

	public $table = "accounts_b2e";
	protected $fillable = [
		// "parent_id",

    ];

      public static function all_accounts_b2e(){
        return Accounts_b2e::get();
    }

}
