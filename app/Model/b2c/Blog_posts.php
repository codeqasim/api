<?php

namespace App\Model\b2c;

use Illuminate\Database\Eloquent\Model;
class Blog_posts extends Model
{
    public $table = "blog_posts";
    /**
     * The attributes that are mass assignable.
     * 
     * @var array
     */
    protected $fillable = [
        "title",
        "slug",
        "img",
        "category_id",
        "desc",
        "status",
        "featured",
        "seo_title",
        "seo_keywords",
        "seo_desc"
    ];


    public static function view_blog_posts()
    {
        return Blog_posts::get()->makeHidden(['created_at','updated_at']);
    }

   
    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = ['password)'];
}
