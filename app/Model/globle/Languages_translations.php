<?php

namespace App\Model\globle;

use Illuminate\Database\Eloquent\Model;
class Languages_translations extends Model
{
    public $table = "languages_translations";
    /**
     * The attributes that are mass assignable.
     * 
     * @var array
     */
    protected $fillable = [
        "lang_id",
        "lang_code_id",
        "trans"
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = ['password'];
}
