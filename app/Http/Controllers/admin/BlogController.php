<?php

namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\admin\Blog_posts;
use App\Model\admin\Blog_category;
use App\Model\admin\Blog_settings;
use DB;
class BlogController extends Controller
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

            //show all Blog_category record
        public function view_blog_category()
    {
        return Blog_category::view_blog_category();
    }

    //Add new Blog_category
        public function add_blog_category(Request $request) {
        $this->validate($request, [
        "name"=>"required"
         ]);
        return Blog_category::add_blog_category($request);

    }

    //update Blog_category record
        public function update_blog_category(Request $request) {
        $this->validate($request, [
        "name"=>"required"
         ]);
        return Blog_category::update_blog_category($request);

    }

        //delete delete_blog_category record
    public function delete_blog_category(Request $request)
    {
        return Blog_category::delete_blog_category($request);
    }

    /////////////////////////////////////////////////////////////////////////////////////////////show all blog post record//////////////////////////////////////////////////////////////////////////////////////////////

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


    //////////////////////////////////////////////////////////////////////////////////////////////////Blog_settings////////////////////////////////////////////////////////////////////////////////////////////////

            //show all Blog_settings record
        public function view_blog_settings()
    {
        return Blog_settings::view_blog_settings();
    }


    //update Blog_settings record
        public function update_blog_settings(Request $request) {
        $this->validate($request, [
        "target"=>"required",
        "title"=>"required",
        "feature_blogs"=>"required",
        "listing_blogs"=>"required",
        "search_blogs"=>"required",
        "related_blogs"=>"required"
         ]);
        return Blog_settings::update_blog_settings($request);

    }
}
