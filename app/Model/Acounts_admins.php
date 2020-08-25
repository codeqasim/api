<?php

namespace App\Model;
use Illuminate\Database\Eloquent\Model;

class Acounts_admins extends Model
{

	public $table = "acounts_admins";
	protected $fillable = [
		// "parent_id",

    ];

      public static function all_acounts_admins(){
        return Acounts_admins::get();
    }

}
