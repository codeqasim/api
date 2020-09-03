<?php

namespace App\Model\globle\mobile;

use Illuminate\Database\Eloquent\Model;

class Mobile_languages_codes extends Model
{
    //
    public $table = "mobile_languages_codes";

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ["keyword"];
}
