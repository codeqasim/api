<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class App_modules extends Model
{
public $table = "appmodules";
protected $fillable = [
		"parent_id",
		"name",
		"status",
		"order",
		"markup",
		"c1",
		"c2",
		"c3",
		"c4",
		"c5",
		"c6"
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

