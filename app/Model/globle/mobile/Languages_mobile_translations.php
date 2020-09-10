<?php

namespace App\Model\globle\mobile;

use Illuminate\Database\Eloquent\Model;

class Languages_mobile_translations extends Model
{
    //
    public $table = "Languages_mobile_translations";

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ["lang_id","lang_code_id","trans"];

}
