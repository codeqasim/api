<?php

namespace App\Model\admin;

use Illuminate\Database\Eloquent\Model;
class Blog_settings extends Model
{
    public $table = "blog_settings";
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        "target",
        "title",
        "feature_blogs",
        "listing_blogs",
        "search_blogs",
        "related blogs"
    ];

      public static function view_blog_settings(){
        return Blog_settings::get();
    }   

    public static function update_blog_settings($request){
        $Blog_settings_id = Blog_settings::find($request->id);
        // Return error if not found
        if (empty($Blog_settings_id)) {
            return response()->json(['updated' => $Blog_settings_id == 1,'status'=>'200']);
        }
        // Update the Acounts_admins
         Blog_settings::where('id', $Blog_settings_id->id)->update([
        "target"=>$request->target,
        "title"=>$request->title,
        "feature_blogs"=>$request->feature_blogs,
        "listing_blogs"=>$request->listing_blogs,
        "search_blogs"=>$request->search_blogs,
        "related_blogs"=>$request->related_blogs
        ]);
        return response()->json(['updated' => 'true','status'=>'200']);
    }


    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = ['password'];
}
