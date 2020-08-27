<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
// use xcrud\xcrud;

class XcrudController extends Controller
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
    public function index(){

    // echo "hello";
    // die;
    require('xcrud/xcrud.php');
    $xcrud = Xcrud::get_instance();
    $xcrud->table('country');
    echo $xcrud->render();

    }
}

