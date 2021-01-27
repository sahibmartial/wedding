<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Monarobase\CountryList\CountryListFacade;
use App\Models\Invite;
use Illuminate\Support\Facades\Validator;
use App\Http\Classe\Mail;

class InviteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         return view('invites.adjah');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $countries=CountryListFacade::getList('fr');
        //dump($countries);
        return view('invites.create',compact('countries'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

       // dd($request);
        $pass=uniqid();

        $data=array('nom'=>$request->nom,'prenom'=>$request->pnom,'email' => $request->email, 'contact'=>$request->contact,'lien'=>$request->lien,'pass'=>$pass,'pays'=>$request->country);

        // dd($data);
       //dd($pass);
        //dd($request);
       // $notifiaction="Merci d'avoir confirmer votre presence à notre mariage du 13 mars 2021,Vous recevrez un mail avc votre pass";

        //dd('here');
        $this->validator($data);

        $email=$this->FindOneByemail($request->email);
        $phone=$this->FindOneByContact($request->contact);
      // dump($email[0]->email);
       //dd($phone[0]->contact);

        //check if mail and contact is unique
        if (!empty($email[0]->email) || !empty($phone[0]->contact) ) {

            return back()->with('success',"Email ou contact déja utilisé pour obtenir une invitation, merci de changer");
        } else {
            //  dd($this->validate($request,$rules));
        Invite::create([
            'nom'=>$request->nom,
            'prenom'=>$request->pnom,
            'email'=>$request->email,
            'contact'=>$request->contact,
            'lien'=>$request->lien,
            'passWedding'=>$pass,
            'pays'=>$request->country
        ]);
        //  $this->validate($request,$rules);
      
        //send email to invite with card wedding

        $mail= new Mail();
        $reference=$pass;
        $to_email=$request->email;
        $to_name="Bonjour ".$request->nom." ".$request->pnom;
        $subject="Confirmation de votre invitation réference: ".$reference;
        $content=$to_name.", le duo parfait tient à vous remercier pour votre présence à son mariage, ci-dessus votre Carte d'invitation, merci.";

        $mail->send($to_email,$to_name,$subject,$content);


        return back()->with('success',"Merci d'avoir confirmer votre presence à notre mariage du 13 mars 2021,Vous recevrez un mail avec votre pass");


        }
        
         
      
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
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
            'prenom'=>['required', 'string','min:2'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'contact' =>['required', 'string'],
            'lien'=>['required', 'string'],
            'passWedding'=>['required', 'string'],
            'pays'=>['required', 'string']
        ]);
    } 


    public function FindOneByemail($email)
    {
        $invite= new Invite();
        $email=$invite->FindOneByemail($email);
       
        return $email;

    }


     public function FindOneByContact($contact)
    {
        // dd($contact);
         $invite= new Invite();
        $contact=$invite->FindOneByContact($contact);

       return $contact;
    }

    
    /**
    *fonction nous connaitre et nos prestations TEAM MAYA
    */

      public function quinoussommes()
    {
         return view('invites.quinoussommes');
    }





}
