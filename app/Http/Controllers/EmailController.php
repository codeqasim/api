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
    $mg = Mailgun::create(env("MAILGUN_KEY"));
    $domain = env("MAILGUN_DOMAIN");
    $mg->messages()->send($domain , [
    'from' => env("MAILGUN_FROM"),
    'to' => 'info@phptravels.com',
    'subject' => 'Hello Qasim Hussain!',
    'text' => 'It is so simple to send a message.'
    ]);
    echo "email send successfully!";
    }
}




