<?php
 
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Mailgun\Mailgun;
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
    $mg = Mailgun::create('8855a5c4691fbce13a7f68d1617960b7-acb0b40c-7835043a');
    $domain = "mail.phptravels.com";
    $mg->messages()->send($domain , [
    'from' => 'postmaster@mail.phptravels.com',
    'to' => 'info@phptravels.com',
    'subject' => 'Hello Qasim Hussain!',
    'text' => 'It is so simple to send a message.'
    ]);
    echo "email send successfully!";
    }
}




