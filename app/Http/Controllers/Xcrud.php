<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class Xcrud extends Controller
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
    public function xcrud(){

    include('xcrud/xcrud.php');
    $xcrud = Xcrud::get_instance();
    $xcrud->table('country');
    echo $xcrud->render();

    }
}

