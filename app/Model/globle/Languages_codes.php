<?php

namespace App\Model\globle;

use Illuminate\Database\Eloquent\Model;
class Languages_codes extends Model
{
    public $table = "languages_codes";
    /**
     * The attributes that are mass assignable.
     * 
     * @var array
     */
    protected $fillable = [
        "keyword"
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = ['password'];
}
