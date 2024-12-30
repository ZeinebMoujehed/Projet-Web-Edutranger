@extends('layouts.layout')

@section('title', 'Formulaire')

@section('content')
    <div class="d-flex" style="height: 100vh;">
        <div style="flex: 1; background-image: url('{{ asset('images/img1.jpg') }}'); background-size: cover; background-position: center;">

        </div>
        <div class="d-flex justify-content-center align-items-center" style="flex: 1; background-color: rgba(255, 255, 255, 0.95);">
            <div class="w-75 p-4 border rounded">
                <h2 class="mb-4 text-center">Contactez-nous</h2>
                @if (session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif
                <form action="{{ route('contact.verifier') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="nom" class="form-label">Nom :</label>
                        <input type="text" id="nom" name="nom" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="prenom" class="form-label">Prénom :</label>
                        <input type="text" id="prenom" name="prenom" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="age" class="form-label">Date de naissance :</label>
                        <input type="date" id="age" name="age" class="form-control" required>
                    </div>
                    <div>
                        <label for="niveauEtudes">Sélectionnez votre niveau d'études :</label>
                        <select class="form-control" id="niveauEtudes" name="niveauEtudes">
                            <option value="" disabled selected>Choisissez une option :</option>
                            <option value="licence">Licence</option>
                            <option value="bachelor">Bachelor</option>
                            <option value="master">Master</option>
                            <option value="cycleIngenieur">Cycle Ingénieur</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="tel" class="form-label">Numéro de téléphone :</label>
                        <input type="tel" id="tel" name="tel" class="form-control" pattern="[0-9]{8}" placeholder="Exp : 26044558" required>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Adresse email :</label>
                        <input type="email" id="email" name="email" class="form-control" required>
                    </div>
                    <button type="submit" class="btn w-100" style="background-color: #6B8E23; color: white;">Envoyer</button>
                </form>
        </div>
    </div>
@endsection
