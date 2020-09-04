<?php

namespace App\Model\admin;

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
        return Blog_category::get();
    }

    public static function add_blog_category($request){
        Blog_category::create([
        "name"=>$request->name
        ]);
        return response()->json(['added' => 'true','status'=>'200']);
    }



      public static function update_blog_category($request){
        $Blog_category_id = Blog_category::find($request->id);
        // Return error if not found
        if (empty($Blog_category_id)) {
            return response()->json(['updated' => $Blog_category_id == 1,'status'=>'200']);
        }
        Blog_category::where('id', $Blog_category_id->id)->update([
        "name"=>$request->name
        ]);
    return response()->json(['updated' => 'true','status'=>'200']);
    }

//delete_mod_integrat
    public static function delete_blog_category($request) {
        $Blog_category_id = Blog_category::find($request->id);
        if (!empty($Blog_category_id)) {
           $Blog_category_id->delete();
       return response()->json(['deleted' => 'true','status'=>'200']);
        }else{
        return response()->json(['deleted' => $Blog_category_id == 1,'status'=>'200']);
        }
    }
    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = ['password)'];
}
