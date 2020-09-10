<?php

namespace App\Model\globle\mobile;

use Illuminate\Database\Eloquent\Model;

class Languages_mobile_codes extends Model
{
    //
    public $table = "Languages_mobile_codes";

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ["keyword"];
}
