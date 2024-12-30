@extends('layouts.layout')

@section('title', 'Détail de l\'actualité')

@section('content')
<div class="container mt-5">
    <h1>{{ $actualite->titre }}</h1>

    <div class="mb-4">
        @if($actualite->image_path)
            <img src="{{ Storage::url($actualite->image_path) }}" class="img-fluid" alt="{{ $actualite->titre }}">
        @else
            <img src="{{ asset('images/default.jpg') }}" class="img-fluid" alt="Image par défaut">
        @endif
    </div>

    <p>{{ $actualite->description }}</p>

    <!-- Affichage du pays associé à l'actualité -->
    <div class="row">
        <div class="col-1 h5">Pays :</div>
        <div class="col">
            @if($actualite->pays)
                {{ $actualite->pays->nom }}
            @else
                Aucun pays associé
            @endif
        </div>
    </div>

    <a href="{{ route('actuality.index') }}" class="btn btn-secondary">Retour à la liste</a>
</div>
@endsection
