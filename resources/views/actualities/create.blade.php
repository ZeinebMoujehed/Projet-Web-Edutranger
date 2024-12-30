@extends('layouts.layout')

@section('title', 'Ajouter une nouvelle actualité')

@section('content')
<div class="container mt-5">
    <h1>Ajouter une nouvelle actualité</h1>

    <form action="{{ route('actuality.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        
        <div class="form-group">
            <label for="titre">Titre</label>
            <input type="text" name="titre" id="titre" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="description">Description</label>
            <textarea name="description" id="description" class="form-control" rows="5" required></textarea>
        </div>

        <!-- Liste déroulante des pays -->
        <div class="form-group">
            <label for="pays_id">Pays</label>
            <select name="pays_id" id="pays_id" class="form-control" required>
                <option value="">-- Sélectionner un pays --</option>
                <option value="1" @selected(old('pays_id') == 1)>France</option>
                <option value="2" @selected(old('pays_id') == 2)>Espagne</option>
                <option value="3" @selected(old('pays_id') == 3)>Italie</option>
                <option value="4" @selected(old('pays_id') == 4)>Allemagne</option>
            </select>
            @error('pays_id')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label for="image_path">Image</label>
            <input type="file" name="image_path" id="image_path" class="form-control-file">
        </div>

        <button type="submit" class="btn btn-primary mt-3">Ajouter</button>
    </form>

    <a href="{{ route('actuality.index') }}" class="btn btn-secondary mt-3">Retour à la liste des actualités</a>
</div>
@endsection
