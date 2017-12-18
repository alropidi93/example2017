<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use GuzzleHttp\Client;
use App\Post;
use Mail;
use Session;

class MailController extends Controller
{
  public function postContacts(Request $request){

    $this->validate($request,[
      'nameContacts' => 'required',
      'emailContacts' => 'required|email',
      'phoneContacts'=> 'required|numeric',
      'messageContacts' => 'required']);
      ///si no se llena bien esto rebota la paguina


      $data = array(
        'nameContacts' => $request->nameContacts,
        'emailContacts' => $request->emailContacts,
        'phoneContacts' => $request->phoneContacts,
        'messageContacts' => $request->messageContacts,
        //'token' => $request->input('g-recaptcha-response')
        );
      //dd($request->all());
      //dd($data['token']);

          ///////////////////
          try{
            Mail::send('emails.contactEmail',$data,function($message) use($data) {

                $message->from($data['emailContacts'],'Orc Contact');

                //$message->to('drigo.beat@gmail.com');//a quien le envias
                $message->subject('contacto de Ejemplo');
            });


          }
          catch(Exception $e){

                return $e->getMessage();
          }
          Session::flash('success','Your email was sent correctly');

          return redirect('/contact');//->Route('email');


          /////////////////////
        }
    /*Mail::send('emails.contactEmail',$data,function($message) use($data) {

        $message->from($data['emailContacts'],'Absortio');

        $message->to('a20105543@pucp.pe');//a quien le envias
        $message->subject('contacto de Absortio');
    });

    Session::flash('success','Your Email was sent');
    return redirect('contacts');//->Route('email');
    */

}
