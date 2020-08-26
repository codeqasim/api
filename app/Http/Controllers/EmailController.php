<?php
 
namespace App\Http\Controllers;
use Illuminate\Http\Request;
// use App\Model\Accounts_b2b;

class EmailController extends Controller
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
    public function email(){
    
    require 'vendor/autoload.php';
    use Mailgun\Mailgun;
    $mgClient = new Mailgun('8855a5c4691fbce13a7f68d1617960b7-acb0b40c-7835043a');
    $domain = "mail.phptravels.com";
    $result = $mgClient->sendMessage("$domain",
        array('from'    => 'Mailgun Sandbox <postmaster@mail.phptravels.com>',
              'to'      => 'Qasim Hussain <info@phptravels.com>',
              'subject' => 'Hello Qasim Hussain',
              'template'    => 'password_reset',
              'h:X-Mailgun-Variables'    => '{"test": "test"}'
          ));
    echo " this is email function";
    }
}




