<?php

namespace App\Model\globle\mobile;

use Illuminate\Database\Eloquent\Model;

class Mobile_languages_translations extends Model
{
    //
    public $table = "mobile_languages_translations";

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ["lang_id","lang_code_id","trans"];

}
