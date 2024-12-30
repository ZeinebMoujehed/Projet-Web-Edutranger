@extends('layouts.layout')

@section('title', 'Actualité')

@push('styles')
    <style>
        .card-img-top {
            height: 250px;
            object-fit: cover;
        }
        .pagination {
        display: flex;
        justify-content: center;
        padding-left: 0;
        list-style: none;
    }
    .page-item {
        margin: 0 3px;
    }
    .page-link {
        color: #007bff;
        text-decoration: none;
        padding: 6px 12px;
        border: 1px solid #ddd;
        border-radius: 4px;
        background-color: #fff;
    }
    .page-link:hover {
        background-color: #f1f1f1;
    }
    .page-item.active .page-link {
        background-color: #007bff;
        color: white;
        border-color: #007bff;
    }
    
    </style>
@endpush

@section('content')

<main class="container my-5">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1 class="text-center mb-4">Nos Actualités</h1>
        
        @if(request()->routeIs('actuality.index'))
            <a href="{{ route('actuality.create') }}" class="btn btn-success">Ajouter une Actualité</a>
        @endif
    </div>

    <!-- Menu déroulant de filtrage par pays -->
    <div class="d-flex flex-row-reverse bd-highlight mb-3">
        <div class="p-2 bg-light border" style="width: 300px;">
            <select onchange="window.location.href=this.value" class="form-select">
                <option>Filtrer par pays</option>
                <option value="{{ route('actuality.index') }}">Tous les pays</option>
                
                @foreach ($pays as $country)
                    <option value="{{ route('actuality.pays', $country->id) }}" 
                        @if(request()->route('pays') == $country->id) selected @endif>
                        {{ $country->nom }}
                    </option>
                @endforeach
            </select>
        </div>
    </div>

    <!-- Affichage des actualités -->
    <div class="row">
        @foreach($actualities as $actualite)
            <div class="col-md-4 mb-4">
                <div class="card h-100">
                    @if($actualite->image_path)
                        <img src="{{ Storage::url($actualite->image_path) }}" class="card-img-top" alt="{{ $actualite->titre }}">
                    @else
                        <img src="{{ asset('images/default.jpg') }}" class="card-img-top" alt="Image par défaut">
                    @endif

                    <div class="card-body">
                        <h5 class="card-title">{{ $actualite->titre }}</h5>
                        <p class="card-text">{{ Str::limit($actualite->description, 100) }}</p>

                        <a href="{{ route('actuality.show', $actualite->id) }}" class="btn btn-info">Voir</a>

                        @if(request()->routeIs('actuality.index'))
                            <a href="{{ route('actuality.edit', $actualite->id) }}" class="btn btn-primary">Modifier</a>
                            <form action="{{ route('actuality.destroy', $actualite->id) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger" onclick="return confirm('Voulez-vous vraiment supprimer cette actualité ?')">Supprimer</button>
                            </form>
                        @endif
                    </div>
                </div>
            </div>
        @endforeach
    </div>
    @if($actualities instanceof \Illuminate\Pagination\LengthAwarePaginator)
        <div class="d-flex justify-content-center mt-4">
            {{ $actualities->links('pagination::bootstrap-4') }}
        </div>
    @endif
    @if(request()->routeIs('actuality.index'))
        <form action="{{ route('logout') }}" method="POST" class="d-inline">
            @csrf
            <button type="submit" class="btn btn-danger" 
                    onclick="return confirm('Voulez-vous vraiment vous déconnecter ?')">
                    Déconnexion
            </button>
        </form> 
    @endif

</main>

@endsection
