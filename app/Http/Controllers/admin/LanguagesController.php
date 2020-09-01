<?php

namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\globle\Languages;
use DB;
class LanguagesController extends Controller
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

            //show all languages record
        public function view_languages()
    {
        return Languages::view_languages();
    }

    //Add new languages
        public function add_languages(Request $request) {
        $this->validate($request, [
        "name"=>"required",
        "country_id"=>"required",
        "code"=>"required",
        "dir"=>"required",
        "status"=>"required",
        "default"=>"required"
         ]);
        return Languages::add_languages($request);

    }

    //update languages record
        public function update_languages(Request $request) {
        $this->validate($request, [
        "name"=>"required",
        "country_id"=>"required",
        "code"=>"required",
        "dir"=>"required",
        "status"=>"required",
        "default"=>"required"
         ]);
        return Languages::update_languages($request);

    }

        //delete delete_languages record
    public function delete_languages(Request $request)
    {
        return Languages::delete_languages($request);
    }
}
