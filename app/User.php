<?php

namespace App;

use Illuminate\Auth\Authenticatable;
use Illuminate\Contracts\Auth\Access\Authorizable as AuthorizableContract;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Database\Eloquent\Model;
use Laravel\Lumen\Auth\Authorizable;

class User extends Model implements AuthenticatableContract, AuthorizableContract
{
    use Authenticatable, Authorizable;
    public $table = "app_settings";
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        "user",
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
