<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\admin\Cms_content;

class Cms_contentController extends Controller
{

    public  function __construct()
    {
    }

    ////////////////////////////////////////////////////////
    /////////// CMS ALL PAGES SHOW FUNCTION ///////////////////
    /// ////////////////////////////////////////////////////
    ///

    public function all_cms_page(Request $request){
        $data = Cms_content::orderBy('id','DESC')->get();
        return response()->json(array('success' => true , 'pages'=>$data), 200);
    }


    ////////////////////////////////////////////////////////
    /////////// CMS CREATE PAGE FUNCTION ///////////////////
    /// ////////////////////////////////////////////////////

    public function add_cms_page(Request $request){
        $str= preg_replace('/\s+/', '-', strtolower($request->title));
        $request->merge(['slug' => $str]);
        $data = $request->all();
        $data = Cms_content::create($data);
        return response()->json(array('success' => true, 'last_insert_id' => $data->id), 200);
    }

    ////////////////////////////////////////////////////////
    /////////// CMS UPDATE PAGE FUNCTION ///////////////////
    /// ////////////////////////////////////////////////////
    ///

    public function update_cms_page(Request $request){
        $data = $request->all();
        $Cms_content = Cms_content::where('id',$data['id'])->first();
        $Cms_content->title = $data['title'];
        $Cms_content->desc = $data['desc'];
        $Cms_content->seo_keyword = $data['seo_keyword'];
        $Cms_content->seo_desc = $data['seo_desc'];
        $Cms_content->seo_title = $data['seo_title'];
        $Cms_content->additional_link = $data['additional_link'];
        $Cms_content->target = $data['target'];
        $Cms_content->status = $data['status'];
        $Cms_content->save();
        return response()->json(array('success' => true), 200);

    }


    ////////////////////////////////////////////////////////
    /////////// CMS DELETE PAGES SHOW FUNCTION ///////////////////
    /// ////////////////////////////////////////////////////
    ///

    public function delete_cms_page(Request $request){
        $data = $request->all();
        Cms_content::where('id',$data['id'])->Delete();
        return response()->json(array('success' => true ), 200);
    }

}
