<?php

namespace App\Http\Controllers\b2c;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\admin\Settings;
use App\Model\admin\Modules;
use App\Model\globle\Currencies;
use App\Model\globle\languages;

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
        return array("settings" => Settings::get(),"modules"=>Modules::where('status',1)->get(),"currencies"=>Currencies::get(),"languages"=>languages::get());
    }
}