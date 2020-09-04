<?php

namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\admin\Blog_settings;
class Blog_settingsController extends Controller
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

            //show all Languages_translations record
        public function view_blog_settings()
    {
        return Blog_settings::view_blog_settings();
    }


    //update Languages_translations record
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