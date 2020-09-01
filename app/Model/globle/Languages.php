<?php

namespace App\Model\globle;

use Illuminate\Database\Eloquent\Model;
class Languages extends Model
{
    public $table = "Languages";
    /**
     * The attributes that are mass assignable.
     * 
     * @var array
     */
    protected $fillable = [
        "name",
        "country_id",
        "code",
        "dir",
        "status",
        "default"
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = ['created_at','updated_at'];
}
