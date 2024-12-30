@extends('layouts.layout')

@section('title', 'Modifier Actualité')

@section('content')
<div class="container mt-5">
    <h1>Modifier une actualité</h1>

    <form action="{{ route('actuality.update', $actualite->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <!-- Champ pour le titre -->
        <div class="form-group">
            <label for="titre">Titre</label>
            <input type="text" name="titre" class="form-control" value="{{ old('titre', $actualite->titre) }}" required>
        </div>

        <!-- Champ pour la description -->
        <div class="form-group">
            <label for="description">Description</label>
            <textarea name="description" class="form-control" required>{{ old('description', $actualite->description) }}</textarea>
        </div>

        <!-- Sélection du pays -->
        <div class="form-group">
            <label for="pays_id">Pays</label>
            <select name="pays_id" class="form-control" required>
                <option value="">-- Sélectionner un pays --</option>
                @foreach ($pays as $paysItem)
                    <option value="{{ $paysItem->id }}" @selected(old('pays_id', $actualite->pays_id) == $paysItem->id)>
                        {{ $paysItem->nom }}
                    </option>
                @endforeach
            </select>
        </div>
        
        <!-- Champ pour l'image -->
        <div class="form-group">
            <label for="image_path">Image</label>
            <input type="file" name="image_path" class="form-control">
            @if ($actualite->image_path)
                <div class="mt-2">
                    <img src="{{ Storage::url($actualite->image_path) }}" width="150" alt="Image actuelle">
                </div>
            @endif
        </div>

        <!-- Affichage des erreurs -->
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <!-- Bouton de soumission -->
        <button type="submit" class="btn w-100" style="background-color: #6B8E23; color: white;">
            Mettre à jour
        </button>
    </form>
    <a href="{{ route('actuality.index') }}" class="btn btn-secondary mt-3">Retour à la liste</a>
</div>
@endsection