<?php

namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\globle\Languages_translations;
use DB;
class Languages_trans extends Controller
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
        public function view_languages_trans()
    {
        return Languages_translations::view_languages_trans();
    }

    //Add new Languages_translations
        public function add_languages_trans(Request $request) {
        $this->validate($request, [
        "lang_id"=>"required",
        "lang_code_id"=>"required",
        "trans"=>"required"
         ]);
        return Languages_translations::add_languages_trans($request);

    }

    //update Languages_translations record
        public function update_languages_trans(Request $request) {
        $this->validate($request, [
        "lang_id"=>"required",
        "lang_code_id"=>"required",
        "trans"=>"required"
         ]);
        return Languages_translations::update_languages_trans($request);

    }

        //delete delete_languages_trans record
    public function delete_languages_trans(Request $request)
    {
        return Languages_translations::delete_languages_trans($request);
    }
}
