<?php

namespace App\Http\Controllers\b2c;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\b2c\Blog_category;
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

}
