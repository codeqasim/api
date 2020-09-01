<?php

namespace App\Http\Controllers\b2c;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\admin\Settings;
use App\Model\admin\Modules;
use App\Model\globle\Currencies;
use App\Model\globle\languages;
use App\Model\globle\languages_codes;
use App\Model\globle\languages_translations;

class Frontsettings extends Controller
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
        public function settings()
    {
        return array(
            "settings" => Settings::get()->makeHidden(['created_at','updated_at']),

            "modules"=>Modules::where('status',1)->get()->makeHidden(['created_at','updated_at']),

            "currencies"=>Currencies::get()->makeHidden(['created_at','updated_at']),

            "languages"=>languages::get()->makeHidden(['created_at','updated_at']));
    }

    public function languages_codes(Request $request)
    {
        //languages_translations
        //languages_codes
        $this->validate($request, [
        "id"=> "required|integer"]);
        $lang_trans = [];
        $languages_translations = languages_translations::where('lang_id',$request->id)->get()->makeHidden(['created_at','updated_at']);
        $p_languages = languages::select('name')->where('id',$request->id)->get();
        foreach ($languages_translations as $key => $value) {
        $lang_code_id =  languages_codes::where('id',$value->lang_code_id)->get();
        foreach ($lang_code_id as $lang => $lang_code) {
        $keyword = $lang_code->keyword;
        $obj =  languages_translations::select('trans')->where('lang_code_id',$lang_code->id)->get();

        foreach ($obj as $key => $value) {
            $value->trans;
            array_push($lang_trans, array('keyword'=>$keyword,'translation'=>$value->trans));
                }
            }
        }
        return array(strtolower($p_languages[0]->name) => $lang_trans);
    }
}