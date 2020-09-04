<?php

namespace App\Http\Controllers\b2c;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\admin\Settings;
use App\Model\admin\Modules;
use App\Model\admin\Blog_category;
use App\Model\admin\Blog_posts;
use App\Model\globle\Countries;
use App\Model\globle\Currencies;
use App\Model\globle\Languages;
use App\Model\globle\Languages_codes;
use App\Model\globle\Languages_translations;
use DB;

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
        "languages"=>DB::table('languages')
        ->join('countries', 'countries.id', '=', 'languages.country_id')
        ->select(
                'languages.id',
                'languages.name',
                'countries.iso as country_code',
                'languages.code',
                'languages.dir',
                'languages.status',
                'languages.default')
            ->get(),
            "Blog_category"=>Blog_category::get()->makeHidden(['created_at','updated_at']),
        "blog_posts"=>DB::table('blog_posts')
        ->join('Blog_category', 'Blog_category.id', '=', 'blog_posts.category_id')
        ->select(
                'blog_posts.id',
                'blog_posts.title',
                'blog_posts.slug',
                'blog_posts.img',
                'Blog_category.name as Blog_category',
                'blog_posts.desc',
                'blog_posts.status',
                'blog_posts.featured',
                'blog_posts.seo_title',
                'blog_posts.seo_keywords',
                'blog_posts.seo_desc',
            )
            ->get());
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
