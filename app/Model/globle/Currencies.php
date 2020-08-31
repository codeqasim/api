<?php

namespace App\Model\globle;

use Illuminate\Database\Eloquent\Model;
class Currencies extends Model
{
    public $table = "currencies";
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        // "site_title",
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [
        'password',
    ];
}
