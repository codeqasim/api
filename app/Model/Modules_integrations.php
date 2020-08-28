<?php
namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Modules_integrations extends Model
{
public $table = "Modules_integrations";
protected $fillable = [
		"modules_id",
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

