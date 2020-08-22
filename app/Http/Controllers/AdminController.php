<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\User;
use App\Modules;
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
        return User::get();
    }
        //show only one record using id
        public function settings_view(Request $request) {
        $settings_id = User::find($request->id);
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
        return User::create([
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
        $settings_id = User::find($request->id);
        if (!empty($settings_id)) {
           $settings_id->delete();
           return response()->json(['deleted' => 'true','status'=>'200']);
        }
        
        return response()->json(['deleted' => $settings_id == 1,'status'=>'200']);
    }

        public function update(Request $request) {
        $this->validate($request, [
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
        // Find the data you want to update
        $settings_id = User::find($request->id);
        // Return error if not found
        if (empty($settings_id)) {
            return response()->json(['updated' => $settings_id == 1,'status'=>'200']);
        }
        // Update the user
         User::where('id', $settings_id->id)->update([
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
        return response()->json(['updated' => 'true','status'=>'200']);
    }

            //show all record
        public function modules()
    {
        return Modules::get();
    }

            //show only one record using id
        public function modules_view(Request $request) {
        $modules_id = Modules::find($request->id);
        if (empty($modules_id)) {
           return "No data found.";
        }
        return $modules_id;
    }

        public function modules_create(Request $request) {
        $this->validate($request, [
        // 'name' => 'required|min:3|max:12',
        // 'email' => "required"|email|unique:users',
        "parent_id"=> "required",
        "name"=> "required",
        "status"=> "required",
        "order"=> "required",
        "markup"=> "required",
        "c1"=> "required",
        "c2"=> "required",
        "c3"=> "required",
        "c4"=> "required",
        "c5"=> "required",
        "c6"=> "required"
        ]);
        return Modules::create([
        "parent_id"=>request('parent_id'),
        "name"=>request('name'),
        "status"=>request('status'),
        "order"=>request('order'),
        "markup"=>request('markup'),
        "c1"=>request('c1'),
        "c2"=>request('c2'),
        "c3"=>request('c3'),
        "c4"=>request('c4'),
        "c5"=>request('c5'),
        "c6"=>request('c6')
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
        "parent_id"=> "required",
        "name"=> "required",
        "status"=> "required",
        "order"=> "required",
        "markup"=> "required",
        "c1"=> "required",
        "c2"=> "required",
        "c3"=> "required",
        "c4"=> "required",
        "c5"=> "required",
        "c6"=> "required"
        ]);
        // Find the data you want to update
        $modules_id = Modules::find($request->id);
        // Return error if not found
        if (empty($modules_id)) {
            return response()->json(['updated' => $modules_id == 1,'status'=>'200']);
        }
        // Update the user
         Modules::where('id', $modules_id->id)->update([
        "parent_id"=>request('parent_id'),
        "name"=>request('name'),
        "status"=>request('status'),
        "order"=>request('order'),
        "markup"=>request('markup'),
        "c1"=>request('c1'),
        "c2"=>request('c2'),
        "c3"=>request('c3'),
        "c4"=>request('c4'),
        "c5"=>request('c5'),
        "c6"=>request('c6')
        ]);
        return response()->json(['updated' => 'true','status'=>'200']);
    }
}
