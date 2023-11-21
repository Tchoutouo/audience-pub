<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMail;

class MailController extends Controller
{
    //
    public function EnvoiMail(Request $request){
        // Valider les données du formulaire
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required',
            'subject' => 'required'
        ]);

        // Créer un tableau avec les données du formulaire
        $data = [
            'name' => $request->name,
            'email' => $request->email,
            'message' => $request->message,
            'subject' => $request->subject,
            'phone' => $request->phone
        ];

        // Envoyer le mail en utilisant le modèle ContactMail et les données du formulaire
        $result =  Mail::to('www.audiencespub@gmail.com')->send(new ContactMail($data));
        
        if($result)
        {
            return redirect()->back();

        }else{

            return redirect()->back();

        }

    }

}
