<?php

namespace App\Model\admin;

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
        return Blog_posts::get();
    }

    public static function add_blog_posts($request){
        Blog_posts::create([
        "title"=>$request->title,
        "slug"=>$request->slug,
        "img"=>$request->img,
        "category_id"=>$request->category_id,
        "desc"=>$request->desc,
        "status"=>$request->status,
        "featured"=>$request->featured,
        "seo_title"=>$request->seo_title,
        "seo_keywords"=>$request->seo_keywords,
        "seo_desc"=>$request->seo_desc
        ]);
        return response()->json(['added' => 'true','status'=>'200']);
    }



      public static function update_blog_posts($request){
        $Blog_posts_id = Blog_posts::find($request->id);
        // Return error if not found
        if (empty($Blog_posts_id)) {
            return response()->json(['updated' => $Blog_posts_id == 1,'status'=>'200']);
        }
        Blog_posts::where('id', $Blog_posts_id->id)->update([
        "title"=>$request->title,
        "slug"=>$request->slug,
        "img"=>$request->img,
        "category_id"=>$request->category_id,
        "desc"=>$request->desc,
        "status"=>$request->status,
        "featured"=>$request->featured,
        "seo_title"=>$request->seo_title,
        "seo_keywords"=>$request->seo_keywords,
        "seo_desc"=>$request->seo_desc
        ]);
    return response()->json(['updated' => 'true','status'=>'200']);
    }

//delete_mod_integrat
    public static function delete_blog_posts($request) {
        $Blog_posts_id = Blog_posts::find($request->id);
        if (!empty($Blog_posts_id)) {
           $Blog_posts_id->delete();
       return response()->json(['deleted' => 'true','status'=>'200']);
        }else{
        return response()->json(['deleted' => $Blog_posts_id == 1,'status'=>'200']);
        }
    }
    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = ['password)'];
}
