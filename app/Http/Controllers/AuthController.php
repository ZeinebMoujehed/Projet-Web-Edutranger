<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    // Afficher le formulaire de connexion
    public function showLoginForm()
    {
        return view('auth.login');
    }

    // Traiter la soumission du formulaire de connexion
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:6',
        ]);

        // Tentative d'authentification
        if (Auth::attempt($request->only('email', 'password'))) {
            // Vérifie si l'utilisateur est admin
            if (Auth::user()->is_admin) {
                return redirect()->route('actuality.index');
            } else {
                Auth::logout(); // Déconnexion si l'utilisateur n'est pas admin
                return back()->withErrors(['email' => 'Vous n\'avez pas accès à cette section.']);
            }
        }

        return back()->withErrors(['email' => 'Identifiants incorrects.']);
    }

    // Déconnexion
    public function logout()
    {
        Auth::logout(); // Déconnecter l'utilisateur
        return redirect('/');
    }
}
