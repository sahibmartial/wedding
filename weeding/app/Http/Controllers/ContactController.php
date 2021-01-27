<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Http\Classe\Mail;
use App\Models\Contact;

class ContactController extends Controller
{
    
    /**
    *fonction de contact company MAYA
    */

     public function contact()
    {
         return view('invites.contact');
    }

    /**
    *fonction post contact company MAYA
    */

     public function postcontact(Request $request)
    {
    	$reference=uniqid();

        $data=array('nom'=>$request->nom,'email' => $request->email, 'message'=>$request->msg,'reference'=>$reference);

        //dd('here');
        $this->validator($data);
        //dd($request);
        Contact::create([
            'nom'=>$request->nom,
            'email'=>$request->email,
            'message'=>$request->msg,
            'reference'=>$reference      
            
        ]);

        $mail= new Mail();
        
        $to_email=$request->email;
        $to_name="Bonjour ".$request->nom;
        $subject="Confirmation de la reception de votre message réference: ".$reference;
        $content=$to_name.", merci de nous faire confiance,votre requète a été prise en compte, à bientot";

        $mail->sendContact($to_email,$to_name,$subject,$content);


        return back()->with('success',"Merci de nous avoir contacté , nous vous repondrons dans un plus bref délai.");
    
    
    }


   /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'nom'=>['required', 'string','min:2'],
            'email' => ['required', 'string', 'email', 'max:255'],
            'message' =>['required', 'string','min:2']         
           
        ]);
    } 
}
