<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function afficherFormulaire()
    {
        return view('contact'); 
    }

    public function verifier(Request $request)
    {
        $request->validate([
            'nom' => 'required|string|alpha',
            'prenom' => 'required|string|alpha',
            'age' => 'required|date',
            'niveauEtudes' => 'required|string',
            'tel' => 'required|string|regex:/^[0-9]{8}$/', 
            'email' => 'required|email',
        ]);
        $nom = $request->input('nom');
        $prenom = $request->input('prenom');
        $date_naissance = $request->input('age');
        $niveau = $request->input('niveau');
        $tel = $request->input('tel');
        $email = $request->input('email');
        
        $age = Carbon::parse($date_naissance)->age;

        $message = "Merci pour votre message, $prenom $nom. Nous vous contacterons le plus tôt possible soit par téléphone sur $tel soit sur cette adresse e-mail $email.";

        return redirect()->route('contact.form')->with('success', nl2br($message));

    }
}
