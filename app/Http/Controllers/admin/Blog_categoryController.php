<?php

namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\admin\Blog_category;
use DB;
class Blog_categoryController extends Controller
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
}
