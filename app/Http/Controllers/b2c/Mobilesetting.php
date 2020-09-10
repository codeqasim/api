<?php

namespace App\Http\Controllers\b2c;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\globle\Languages;
use App\Model\globle\mobile\Languages_mobile_translations;
use App\Model\globle\mobile\languages_mobile_codes;

class Mobilesetting extends Controller
{
    //
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function mobile_languages_codes(Request $request)
    {
        $this->validate($request, ["id"=> "required|integer"]);
        $lang_trans = [];
        $languages_translations = Languages_mobile_translations::where('lang_id',$request->id)->get()->makeHidden(['created_at','updated_at']);
        $p_languages = languages::select('name')->where('id',$request->id)->get();
        foreach ($languages_translations as $key => $value) {
            $lang_code_id =  languages_mobile_codes::where('id',$value->lang_code_id)->get();
            foreach ($lang_code_id as $lang => $lang_code) {
                $keyword = $lang_code->keyword;
                $obj =  Languages_mobile_translations::select('trans')->where('lang_code_id',$lang_code->id)->get();

                foreach ($obj as $key => $value) {
                    $value->trans;
                    array_push($lang_trans, array('keyword'=>$keyword,'translation'=>$value->trans));
                }
            }
        }
        return array(strtolower($p_languages[0]->name) => $lang_trans);
    }
}
