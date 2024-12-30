<?php

namespace App\Http\Controllers;

use App\Models\Pays;
use App\Models\Actualite;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ActualiteController extends Controller
{


    /**
     * Affiche la liste des actualités.
     */
    
    
    public function index(Request $request) {
        $query = Actualite::query();
   
        // Appliquer un filtre par pays si nécessaire
        if ($request->has('pays') && $request->pays != '') {
            $query->where('pays_id', $request->pays);
        }
   
        // Récupérer les actualités paginées
        $actualities = $query->paginate(12)->appends($request->query());
        // Vérifier si des pays existent dans la table
        $pays = Pays::all();
        if ($pays->isEmpty()) {
            // Liste temporaire statique
            $pays = collect([
                (object)['id' => 1, 'name' => 'France'],
                (object)['id' => 2, 'name' => 'Espagne'],
                (object)['id' => 3, 'name' => 'Italie'],
                (object)['id' => 4, 'name' => 'Allemagne'],
            ]);
        }
   
        return view('actualities.index', compact('actualities', 'pays'));
    }

    /**
     * Affiche le formulaire de création d'une actualité.
     */

    public function filterByCountry($pays_id) {
        $pays = Pays::all();  // Récupère tous les pays pour le menu déroulant
        $actualities = Actualite::where('pays_id', $pays_id)->get();  // Filtre par pays
        return view('actualities.index', compact('actualities', 'pays'));
    }
    public function create()
    {
        // Récupérer tous les pays pour la liste déroulante
        $pays = Pays::all();

        return view('actualities.create', compact('pays'));
    }



    /**
     * Enregistre une nouvelle actualité.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'titre' => 'required|max:255',
            'description' => 'required',
            'pays_id' => 'required|exists:pays,id',
            'image_path' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:5120',
        ]);

        // Téléchargement de l'image si elle est présente
        $imagePath = $request->file('image_path')
                    ? $request->file('image_path')->store('actualities', 'public')
                    : null;

        Actualite::create([
            'titre' => $validated['titre'],
            'description' => $validated['description'],
            'pays_id' => $validated['pays_id'],
            'image_path' => $imagePath,
        ]);

        return redirect()->route('actuality.index')
                        ->with('success', 'Actualité ajoutée avec succès !');
    }



    
    /**
     * Affiche les détails d'une actualité.
     */
    public function show($id)
    {
        $actualite = Actualite::with('pays')->findOrFail($id);

        return view('actualities.show', compact('actualite'));
    }



    
    /**
     * Affiche le formulaire d'édition d'une actualité.
     */
    public function edit($id) {
        $actualite = Actualite::findOrFail($id);
    
        $pays = collect([
            (object)['id' => 1, 'nom' => 'France'],
            (object)['id' => 2, 'nom' => 'Espagne'],
            (object)['id' => 3, 'nom' => 'Italie'],
            (object)['id' => 4, 'nom' => 'Allemagne'],
        ]);
    
        return view('actualities.edit', compact('actualite', 'pays'));
    }
    

    // Méthode pour mettre à jour l'actualité
    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'titre' => 'required|string|max:255',
            'description' => 'required|string',
            'pays_id' => 'required|exists:pays,id',  
            'image_path' => 'nullable|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
        ]);

        $actualite = Actualite::findOrFail($id);
        $actualite->titre = $request->input('titre');
        $actualite->description = $request->input('description');
        $actualite->pays_id = $request->input('pays_id');

        if ($request->hasFile('image_path')) {
            // Gérer l'image si elle est envoyée
            $imagePath = $request->file('image_path')->store('actualities', 'public');
            
            $actualite->image_path = $imagePath;
        }

        $actualite->save();  // Sauvegarder les modifications

        return redirect()->route('actuality.index')->with('success', 'Actualité mise à jour avec succès');
    }



    /**
     * Supprime une actualité.
     */
    public function destroy($id)
    {
        $actualite = Actualite::findOrFail($id);

        // Suppression de l'image associée si existante
        if ($actualite->image_path) {
            Storage::disk('public')->delete($actualite->image_path);
        }

        $actualite->delete();

        return redirect()->route('actuality.index')
                         ->with('success', 'Actualité supprimée avec succès.');
    }
}
