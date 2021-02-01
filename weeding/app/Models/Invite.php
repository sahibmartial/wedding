<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use DB;

class Invite extends Model
{
    use HasFactory;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nom',
        'prenom',
        'email',
        'contact',
        'lien',
        'passWedding',
        'pays'
    ];

    


     public function FindOneByemail($email)
    {

        $result=Invite::whereEmail($email)
        ->get('email');
        
        return $result;
    }

     public function FindOneByContact($contact)
    {  
       

        $result=Invite::whereContact($contact)
        ->get('contact');
        
        return $result;
    }
    /**
    *show list with alien of  married
    */

    public function showInvitedWithlien($lien)
    {  
       
        $result=Invite::whereLien($lien)
        ->get(['nom','prenom','email','contact','pays','passWedding']);
        return $result;
    }


    

}
