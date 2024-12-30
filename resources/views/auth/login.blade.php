@extends('layouts.layout')

@section('title', 'Authentification')

@section('content')
<div class="d-flex justify-content-center align-items-center vh-100">
    <div class="col-md-6 col-lg-4">
        <div class="card shadow-lg p-4 rounded">
            <div class="text-center mb-4">
                <h2 class="mb-3">Bienvenue 👋</h2>
                <p class="text-muted">Veuillez vous connecter à votre compte</p>
            </div>

            <form action="{{ route('login.submit') }}" method="POST">
                @csrf
                <div class="form-group mb-3">
                    <label for="email" class="form-label">Adresse Email</label>
                    <input type="email" name="email" id="email" class="form-control" required 
                           placeholder="Entrez votre email">
                </div>

                <div class="form-group mb-4">
                    <label for="password" class="form-label">Mot de passe</label>
                    <input type="password" name="password" id="password" class="form-control" required 
                           placeholder="Entrez votre mot de passe">
                </div>

                <button type="submit" class="btn btn-primary w-100">Se connecter</button>

                @if ($errors->any())
                    <div class="alert alert-danger mt-3">
                        @foreach ($errors->all() as $error)
                            <p class="mb-0">{{ $error }}</p>
                        @endforeach
                    </div>
                @endif
            </form>
        </div>

        <div class="text-center mt-3">
            <a href="#" class="text-muted">Mot de passe oublié ?</a>
        </div>
    </div>
</div>
@endsection
