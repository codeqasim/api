<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Model\Modules;
class Frontmodules extends Controller
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
        public function modules()
    {
        return Modules::get();
    }
}