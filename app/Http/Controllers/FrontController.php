<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Model\Settings;
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
        return Settings::get();
    }
}