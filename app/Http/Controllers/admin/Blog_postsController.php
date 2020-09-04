<?php

namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\admin\Blog_posts;
use DB;
class Blog_postsController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }
        //show all record

            //show all Blog_posts record
        public function view_blog_posts()
    {
        return Blog_posts::view_blog_posts();
    }

    //Add new Blog_posts
        public function add_blog_posts(Request $request) {
        $this->validate($request, [
        "title"=>"required",
        "slug"=>"required",
        "img"=>"required",
        "category_id"=>"required",
        "desc"=>"required",
        "status"=>"required",
        "featured"=>"required",
        "seo_title"=>"required",
        "seo_keywords"=>"required",
        "seo_desc"=>"required"
         ]);
        return Blog_posts::add_blog_posts($request);

    }

    //update Blog_posts record
        public function update_blog_posts(Request $request) {
        $this->validate($request, [
        "title"=>"required",
        "slug"=>"required",
        "img"=>"required",
        "category_id"=>"required",
        "desc"=>"required",
        "status"=>"required",
        "featured"=>"required",
        "seo_title"=>"required",
        "seo_keywords"=>"required",
        "seo_desc"=>"required"
         ]);
        return Blog_posts::update_blog_posts($request);

    }

        //delete delete_blog_posts record
    public function delete_blog_posts(Request $request)
    {
        return Blog_posts::delete_blog_posts($request);
    }
}
