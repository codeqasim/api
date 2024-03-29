<?php

namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\admin\Settings;
use App\Model\admin\Modules;
use App\Model\admin\Modules_integrations;
use App\Model\globle\Currencies;
use App\Model\globle\Countries;
use DB;
use URL;
class AdminController extends Controller
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
        return  Settings::get();
    }
        //show only one record using id
        public function settings_view(Request $request) {
        $settings_id = Settings::find($request->id);
        if (empty($settings_id)) {
           return "No data found.";
        }
        return $settings_id;
    }
        //Add new settings record
        public function settings_create(Request $request) {
        $this->validate($request, [
        // 'name' => 'required|min:3|max:12',
        // 'email' => "required"|email|unique:users',
        "site_title"=> "required",
        "home_title"=> "required",
        "site_url"=> "required",
        "ssl_url"=> "required",
        "tag_line"=> "required",
        "site_name"=> "required",
        "address"=> "required",
        "phone"=> "required",
        "copyright"=> "required",
        "seo_status"=> "required",
        "keywords"=> "required",
        "meta_description"=> "required",
        "header_logo_img"=> "required",
        "footer_logo_img"=> "required",
        "favicon_img"=> "required",
        "currency_sign"=> "required",
        "currency_code"=> "required",
        "google"=> "required",
        "mapApi"=> "required",
        "javascript"=> "required",
        "reviews"=> "required",
        "gallery_approve"=> "required",
        "video_uploads"=> "required",
        "default_lang"=> "required",
        "multi_lang"=> "required",
        "date_f"=> "required",
        "date_f_js"=> "required",
        "license_key"=> "required",
        "local_key"=> "required",
        "secret_key"=> "required",
        "default_city"=> "required",
        "default_theme"=> "required",
        "offline_message"=> "required",
        "site_offline"=> "required",
        "multi_curr"=> "required",
        "booking_expiry"=> "required",
        "booking_cancellation"=> "required",
        "coupon_code_length"=> "required",
        "coupon_code_type"=> "required",
        "secure_admin_key"=> "required",
        "secure_admin_status"=> "required",
        "secure_supplier_key"=> "required",
        "secure_supplier_status"=> "required",
        "allow_registration"=> "required",
        "user_reg_approval"=> "required",
        "allow_supplier_registration"=> "required",
        "default_gateway"=> "required",
        "searchbox"=> "required",
        "rss"=> "required",
        "updates_check"=> "required",
        "restrict_website"=> "required",
        "mobile_redirect_url"=> "required"
        ]);
        return Settings::create([
        'site_title'=>request('site_title'),
        'home_title'=>request('home_title'),
        'site_url'=>request('site_url'),
        'ssl_url'=>request('ssl_url'),
        'tag_line'=>request('tag_line'),
        'site_name'=>request('site_name'),
        'address'=>request('address'),
        'phone'=>request('phone'),
        'copyright'=>request('copyright'),
        'seo_status'=>request('seo_status'),
        'keywords'=>request('keywords'),
        'meta_description'=>request('meta_description'),
        'header_logo_img'=>request('header_logo_img'),
        'footer_logo_img'=>request('footer_logo_img'),
        'favicon_img'=>request('favicon_img'),
        'currency_sign'=>request('currency_sign'),
        'currency_code'=>request('currency_code'),
        'google'=>request('google'),
        'mapApi'=>request('mapApi'),
        'javascript'=>request('javascript'),
        'reviews'=>request('reviews'),
        'gallery_approve'=>request('gallery_approve'),
        'video_uploads'=>request('video_uploads'),
        'default_lang'=>request('default_lang'),
        'multi_lang'=>request('multi_lang'),
        'date_f'=>request('date_f'),
        'date_f_js'=>request('date_f_js'),
        'license_key'=>request('license_key'),
        'local_key'=>request('local_key'),
        'secret_key'=>request('secret_key'),
        'default_city'=>request('default_city'),
        'default_theme'=>request('default_theme'),
        'offline_message'=>request('offline_message'),
        'site_offline'=>request('site_offline'),
        'multi_curr'=>request('multi_curr'), 
        'booking_expiry'=>request('booking_expiry'),
        'booking_cancellation'=>request('booking_cancellation'),
        'coupon_code_length'=>request('coupon_code_length'),
        'coupon_code_type'=>request('coupon_code_type'),
        'secure_admin_key'=>request('secure_admin_key'),
        'secure_admin_status'=>request('secure_admin_status'),
        'secure_supplier_key'=>request('secure_supplier_key'),
        'secure_supplier_status'=>request('secure_supplier_status'),
        'allow_registration'=>request('allow_registration'),
        'user_reg_approval'=>request('user_reg_approval'),
        'allow_supplier_registration'=>request('allow_supplier_registration'),
        'default_gateway'=>request('default_gateway'),
        'searchbox'=>request('searchbox'),
        'rss'=>request('rss'),
        'updates_check'=>request('updates_check'),
        'restrict_website'=>request('restrict_website'),
        'mobile_redirect_url'=>request('mobile_redirect_url')
        ]);
    }
        public function delete(Request $request) {
        $settings_id = Settings::find($request->id);
        if (!empty($settings_id)) {
           $settings_id->delete();
           return response()->json(['deleted' => 'true','status'=>'200']);
        }
        
        return response()->json(['deleted' => $settings_id == 1,'status'=>'200']);
    }

        public function update(Request $request) {

/*header_logo_img*/
            $head_explodeed = explode(',', $request->header_logo_img);
            $head_words = explode(';', $head_explodeed[0]);
            $head_base64 = array_pop($head_words);
            if ($head_base64 == 'base64') {
                $head_decoded = base64_decode($head_explodeed[1]);
                if (str_contains($head_explodeed[0],'jpeg'))
                {$head_exension = 'jpg';}else{$head_exension = 'png';}
                $head_logo_name = 'header_logo.'.$head_exension;
                if($head_logo_name!=""){
                // storing image in storage/app/public Folder
                \Storage::disk('public')->put($head_logo_name,$head_decoded);
                }
            } else {
                $head_logo_name = $request->header_logo_img;
            }

/*footer_logo_img*/
            $footer_explodeed = explode(',', $request->footer_logo_img);
            $footer_words = explode(';', $footer_explodeed[0]);
            $footer_base64 = array_pop($footer_words);
            if ($footer_base64 == 'base64') {
                $footer_decoded = base64_decode($footer_explodeed[1]);
                if (str_contains($footer_explodeed[0],'jpeg'))
                {$footer_exension = 'jpg';}else{$footer_exension = 'png';}
                $footer_logo_name = 'footer_logo.'.$footer_exension;
                if($footer_logo_name!=""){
                // storing image in storage/app/public Folder
                \Storage::disk('public')->put($footer_logo_name,$footer_decoded);
                }
            } else {
                $footer_logo_name = $request->footer_logo_img;
            }


/*favicon_img*/
            $favicon_explodeed = explode(',', $request->favicon_img);
            $favicon_words = explode(';', $favicon_explodeed[0]);

            $favicon_base64 = array_pop($favicon_words);
            if ($favicon_base64 == 'base64') {

                $favicon_decoded = base64_decode($favicon_explodeed[1]);
                if (str_contains($favicon_explodeed[0],'jpeg'))
                {$favicon_exension = 'jpg';}else{$favicon_exension = 'png';}
                $favicon_logo_name = 'favicon_logo.'.$favicon_exension;
                if($favicon_logo_name!=""){
                // storing image in storage/app/public Folder
                \Storage::disk('public')->put($favicon_logo_name,$favicon_decoded);
                }
            } else {
                $favicon_logo_name = $request->favicon_img;
            }

        // Update the Settings
         $settings_id = Settings::where('id',request('id'))->update([
        'site_title'=>request('site_title'),
        'home_title'=>request('home_title'),
        'site_url'=>request('site_url'),
        'ssl_url'=>request('ssl_url'),
        'tag_line'=>request('tag_line'),
        'site_name'=>request('site_name'),
        'address'=>request('address'),
        'phone'=>request('phone'),
        'copyright'=>request('copyright'),
        'seo_status'=>request('seo_status'),
        'keywords'=>request('keywords'),
        'meta_description'=>request('meta_description'),
        'header_logo_img'=>$head_logo_name,
        'footer_logo_img'=>$footer_logo_name,
        'favicon_img'=>$favicon_logo_name,
        'currency_sign'=>request('currency_sign'),
        'currency_code'=>request('currency_code'),
        'google'=>request('google'),
        'mapApi'=>request('mapApi'),
        'javascript'=>request('javascript'),
        'reviews'=>request('reviews'),
        'gallery_approve'=>request('gallery_approve'),
        'video_uploads'=>request('video_uploads'),
        'default_lang'=>request('default_lang'),
        'multi_lang'=>request('multi_lang'),
        'date_f'=>request('date_f'),
        'date_f_js'=>request('date_f_js'),
        'license_key'=>request('license_key'),
        'local_key'=>request('local_key'),
        'secret_key'=>request('secret_key'),
        'default_city'=>request('default_city'),
        'default_theme'=>request('default_theme'),
        'offline_message'=>request('offline_message'),
        'site_offline'=>request('site_offline'),
        'multi_curr'=>request('multi_curr'),
        'booking_expiry'=>request('booking_expiry'),
        'booking_cancellation'=>request('booking_cancellation'),
        'coupon_code_length'=>request('coupon_code_length'),
        'coupon_code_type'=>request('coupon_code_type'),
        'secure_admin_key'=>request('secure_admin_key'),
        'secure_admin_status'=>request('secure_admin_status'),
        'secure_supplier_key'=>request('secure_supplier_key'),
        'secure_supplier_status'=>request('secure_supplier_status'),
        'allow_registration'=>request('allow_registration'),
        'user_reg_approval'=>request('user_reg_approval'),
    'allow_supplier_registration'=>request('allow_supplier_registration'),
        'default_gateway'=>request('default_gateway'),
        'searchbox'=>request('searchbox'),
        'rss'=>request('rss'),
        'updates_check'=>request('updates_check'),
        'restrict_website'=>request('restrict_website'),
        'mobile_redirect_url'=>request('mobile_redirect_url')
        ]);
         if ($settings_id) {
            return response()->json(['updated' => $settings_id == 1,'status'=>'200']);
         }
        return response()->json(['updated' => 'false','status'=>'200']);
        } 

            //show all record
        public function modules()
        {
        $modules_data = [];
        $pmodules1 =  DB::table('modules')->get();
        foreach ($pmodules1 as $key => $value) {
        $pmodules2 =  DB::table('modules')->where('name',$value->name)->get();
        foreach ($pmodules2 as $key2 => $value2) {
       $obj = array($value2->name=>array('modules' => $pmodules2, 'data'=>DB::table('modules_integrations')->where('modules_id',$value2->id)->get()));
        array_push($modules_data, $obj);
    
        }
    }
        return $modules_data;
}

            //show only one record using id
        public function modules_view(Request $request) {
        $modules_id = Modules::find($request->id);
        if (empty($modules_id)) {
        return response()->json(['message' => 'data Not found!','status'=>'200']);
        }
        return $modules_id;
    }

        public function modules_create(Request $request) {
        $this->validate($request, [
        // 'name' => 'required|min:3|max:12',
        // 'email' => "required"|email|unique:users',
        "name"=> "required",
        "status"=> "required",
        "order"=> "required"
        ]);
        return Modules::create([
        "name"=>request('name'),
        "status"=>request('status'),
        "order"=>request('order')
        ]);
    }
        public function modules_delete(Request $request) {
        $modules_id = Modules::find($request->id);
        if (!empty($modules_id)) {
           $modules_id->delete();
           return response()->json(['deleted' => 'true','status'=>'200']);
        }
        
        return response()->json(['deleted' => $modules_id == 1,'status'=>'200']);
    }

        public function modules_update(Request $request) {
        $this->validate($request, [
        "name"=> "required",
        "status"=> "required",
        "order"=> "required",
        ]);
        // Find the data you want to update
        $modules_id = Modules::find($request->id);
        // Return error if not found
        if (empty($modules_id)) {
            return response()->json(['updated' => $modules_id == 1,'status'=>'200']);
        }
        // Update the App_settings
         Modules::where('id', $modules_id->id)->update([
        "name"=>request('name'),
        "status"=>request('status'),
        "order"=>request('order')
        ]);
        return response()->json(['updated' => 'true','status'=>'200']);
    }

//=================================================
        //show all modules_integrations record
        public function modules_integrations()
    {
        return Modules_integrations::view_modules_integrate();
    }
        //Add new modules_integrations record
        public function add_mod_integrat(Request $request) {
        $this->validate($request, [
        "modules_id"=> "required",
        "name"=> "required",
        "status"=> "required",
        "order"=> "required",
        "markup_b2c"=> "required",
        "markup_b2b"=> "required",
        "markup_b2e"=> "required",
        "c1"=> "required",
        "c2"=> "required",
        "c3"=> "required",
        "c4"=> "required",
        "c5"=> "required",
        "c6"=> "required",
        "c7"=> "required",
        "c8"=> "required",
        "c9"=> "required",
        "c10"=> "required"
         ]);
        return Modules_integrations::add_mod_integrat($request);

    }

            //update new modules_integrations record
        public function update_mod_integrat(Request $request) {
        $this->validate($request, [
        "modules_id"=> "required",
        "name"=> "required",
        "status"=> "required",
        "order"=> "required",
        "markup_b2c"=> "required",
        "markup_b2b"=> "required",
        "markup_b2e"=> "required",
        "c1"=> "required",
        "c2"=> "required",
        "c3"=> "required",
        "c4"=> "required",
        "c5"=> "required",
        "c6"=> "required",
        "c7"=> "required",
        "c8"=> "required",
        "c9"=> "required",
        "c10"=> "required"
         ]);
        return Modules_integrations::update_mod_integrat($request);

    }

        //delete delete_mod_integrat record
    public function delete_mod_integrat(Request $request)
    {
        return Modules_integrations::delete_mod_integrat($request);
    }

            //show all Currencies record
        public function view_currencies()
    {
        return Currencies::view_currencies();
    }

    //Add new Currencies
        public function add_currencies(Request $request) {
        $this->validate($request, [
        "country_id"=> "required",
        "name"=> "required",
        "symbol"=> "required",
        "code"=> "required",
        "rate"=> "required",
        // "decimals"=> "required",
        // "placement"=> "required",
        // "order"=> "required",
        // "default"=> "required",
        "active"=> "required"
         ]);
        return Currencies::add_currencies($request);

    }

    //update Currencies record
        public function update_currencies(Request $request) {
        $this->validate($request, [
        "id"=> "required",
        "country_id"=> "required",
        "name"=> "required",
        "symbol"=> "required",
        "code"=> "required",
        "rate"=> "required",
        // "decimals"=> "required",
        // "placement"=> "required",
        // "order"=> "required", 
        // "default"=> "required",
        "active"=> "required"
         ]);
        return Currencies::update_currencies($request);

    }

        //delete delete_Currencies record
    public function delete_currencies(Request $request)
    {
        return Currencies::delete_currencies($request);
    }

                //show all countries record
        public function countries()
    {
        return Countries::all_countries();
    }
}
