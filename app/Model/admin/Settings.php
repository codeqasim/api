<?php

namespace App\Model\admin;

use Illuminate\Database\Eloquent\Model;
class Settings extends Model
{
    public $table = "settings";
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        "site_title",
        "home_title",
        "site_url",
        "ssl_url",
        "tag_line",
        "site_name",
        "address",
        "phone",
        "copyright",
        "seo_status",
        "keywords",
        "meta_description",
        "header_logo_img",
        "footer_logo_img",
        "favicon_img",
        "currency_sign",
        "currency_code",
        "google",
        "mapApi",
        "javascript",
        "reviews",
        "gallery_approve",
        "video_uploads",
        "default_lang",
        "multi_lang",
        "date_f",
        "date_f_js",
        "license_key",
        "local_key",
        "secret_key",
        "default_city",
        "default_theme",
        "offline_message",
        "site_offline",
        "multi_curr",
        "booking_expiry",
        "booking_cancellation",
        "coupon_code_length",
        "coupon_code_type",
        "secure_admin_key",
        "secure_admin_status",
        "secure_supplier_key",
        "secure_supplier_status",
        "allow_registration",
        "user_reg_approval",
        "allow_supplier_registration",
        "default_gateway",
        "searchbox",
        "rss",
        "updates_check",
        "restrict_website",
        "mobile_redirect_url"
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [
        'password',
    ];
}
