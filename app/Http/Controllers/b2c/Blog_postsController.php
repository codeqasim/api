<?php

namespace App\Http\Controllers\b2c;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\b2c\Blog_posts;
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

}
