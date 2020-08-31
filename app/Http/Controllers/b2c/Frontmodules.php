<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Model\Modules;
use App\Model\Modules_integrations;
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
        $modules_data = [];
        $pmodules =  Modules::where('status',1)->get();
        foreach ($pmodules as $key => $value) {
         $obj = array($value->name => Modules_integrations::where('modules_id',$value->id)->get());
            array_push($modules_data, $obj);
        return $modules_data;
        }
       // return Modules::get(['name','status','order']);
    }
}