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
        $module = DB::table('modules')->where('status',1)->select('name')->get();
        $data = array(
        "settings" => Settings::get()->makeHidden(['created_at','updated_at']),
        "modules"=>Modules::where('status',1)->get()->makeHidden(['created_at','updated_at']),
        "currencies"=>DB::table('currencies')
        ->join('countries', 'countries.id', '=', 'currencies.country_id')
        ->select(
                'currencies.id',
                'currencies.name',
                'countries.nicename as country_name',
                "currencies.symbol",
                "currencies.code",
                "currencies.rate",
                "currencies.decimals",
                "currencies.placement",
                "currencies.order",
                "currencies.default",
                "currencies.active",
                "currencies.featured"
                )
            ->get(),
        "languages"=>DB::table('languages')
        ->join('countries', 'countries.id', '=', 'languages.country_id')
        ->select(
                'languages.id',
                'languages.name',
                'countries.iso as country_code',
                'countries.nicename as country_name',
                'languages.code',
                'languages.dir',
                'languages.status',
                'languages.default',
                'languages.featured')
            ->get(),
            "featured"=>array(
            $module[0]->name=>DB::table('blog_posts')
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
            ->get(),
            $module[1]->name=>DB::table('modules')->where('status',1)->where('name','flights')->select('name')->get(),
            $module[2]->name=>DB::table('modules')->where('status',1)->where('name','hotels')->select('name')->get())
            // "blog_category"=>Blog_category::get()->makeHidden(['created_at','updated_at']),
        );

        return $data;
    }

    public function languages_codes(Request $request)
    {
        $this->validate($request, ["id"=> "required|integer"]);
        $record = [];
            $p_languages = languages::select('name')->where('id',$request->id)->get();
            $languages_translations = languages_translations::where('lang_id',$request->id)->get()->makeHidden(['created_at','updated_at']);
            foreach ($languages_translations as $key => $value) {
                $lang_code_id = languages_codes::where('id', $value->lang_code_id)->get()->makeHidden(['created_at','updated_at']);
                foreach ($lang_code_id as $lang => $lang_code) {
                    $keyword = $lang_code->keyword;
                   array_push($record,(object)[
                       'keyword'=>$keyword,
                       'translation'=>$value->trans
                   ]);
                }
            }
        return array(strtolower($p_languages[0]->name) => $record);
    }

}

