<?php

namespace App\Model\b2c;

use Illuminate\Database\Eloquent\Model;
class Blog_category extends Model
{
    public $table = "blog_category";
    /**
     * The attributes that are mass assignable.
     * 
     * @var array
     */
    protected $fillable = [
        "name"
    ];


    public static function view_blog_category()
    {
        return Blog_category::get()->makeHidden(['created_at','updated_at']);
    }

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = ['password)'];
}
