<?php

namespace App\Model\admin;

use Illuminate\Database\Eloquent\Model;

class Modules extends Model
{
public $table = "modules";
protected $fillable = [
		"name",
		"status",
		"order",
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = ['password'];
}

