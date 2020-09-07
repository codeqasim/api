<?php

namespace App\Model\b2c;

use Illuminate\Database\Eloquent\Model;
use DB;
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
        // return Blog_posts::get()->makeHidden(['created_at','updated_at']);

        return DB::table('blog_posts')
        ->join('blog_category', 'blog_category.id', '=', 'blog_posts.category_id')
        ->select(
                "blog_posts.id",
                "blog_posts.title",
                "blog_posts.slug",
                "blog_posts.img",
                "Blog_category.name as Blog_category",
                "blog_posts.desc",
                "blog_posts.status",
                "blog_posts.featured",
                "blog_posts.seo_title",
                "blog_posts.seo_keywords",
                "blog_posts.seo_desc")
            ->get();
    }

   
    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = ['password)'];
}
