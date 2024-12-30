@extends('layouts.layout')

@section('title', 'Accueil')

@section('content')

    <style>
        html, body {
            margin: 0;
            padding: 0;
            width: 100%;
            height: 100%;
        }

        .hover-image {
            position: relative;
            overflow: hidden;
            transition: transform 0.3s ease;
            cursor: pointer;
        }

        .hover-image img {
            width: 100%;
            height: 300px; 
            object-fit: cover; 
            transition: transform 0.3s ease;
        }

        .hover-image:hover img {
            transform: scale(1.1); 
        }

        .overlay {
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            background: rgba(0, 0, 0, 0.7);
            color: #fff;
            padding: 15px;
            opacity: 0; 
            transition: opacity 0.3s ease;
            text-align: center;
        }

        .hover-image:hover .overlay {
            opacity: 1; 
        }
        .carousel {
            width: 100%;
            height: 100vh;
            margin: 0;
            padding: 0;
        }


        .carousel-inner {
            width: 100%;
            height: 100%;
        }

        .carousel-item {
            width: 100%;
            height: 100%;
        }


        .carousel-item img {
            width: 150%;
            height: 100%;
            object-fit: cover; 
        }
        

    </style>

    <div id="imageCarousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{ asset('images/img2.jpg') }}" class="d-block w-100" alt="Image 1">
            </div>
            <div class="carousel-item">
                <img src="{{ asset('images/etudiants.jpg') }}" class="d-block w-100" alt="Image 2">
            </div>
            <div class="carousel-item">
                <img src="{{ asset('images/etudiants2.jpg') }}" class="d-block w-100" alt="Image 3">
            </div>
            <div class="carousel-item">
                <img src="{{ asset('images/etudiants3.jpg') }}" class="d-block w-100" alt="Image 4">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#imageCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Précédent</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#imageCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Suivant</span>
        </button>
    </div>

        <div class="container mt-5" data-aos="fade-up">
            <div class="row">
                <div class="col-md-5" data-aos="fade-right">
                    <h2>Pourquoi étudier à l'étranger ?</h2>
                    <p>
                        Étudier à l'étranger offre de nombreuses opportunités pour enrichir votre expérience académique et personnelle. 
                        Vous aurez la chance d'apprendre dans un environnement international, de rencontrer des personnes de cultures différentes, 
                        et d'améliorer vos compétences linguistiques.
                    </p>
                    <ul>
                        <li>Développer une perspective mondiale</li>
                        <li>Rencontrer des gens de divers horizons</li>
                        <li>Apprendre de nouvelles langues</li>
                        <li>Découvrir de nouvelles cultures</li>
                    </ul>
                </div>

                <div class="col-md-1"></div>

                <div class="col-md-6" data-aos="fade-left">
                    <h2>Locaux disponibles</h2>
                    <div class="d-flex align-items-center mb-3">
                        <img src="{{ asset('images/loc.png') }}" alt="Locaux disponibles" style="width: 50px; height: auto; margin-right: 15px;">
                        <div>
                            <p>
                                <strong>Sfax, Tunisie</strong><br>
                                Route Lafrane Km 3<br>
                                Tel : +216 31 320 122
                            </p>
                        </div>
                    </div>
                    
                    <div class="d-flex align-items-center">
                        <img src="{{ asset('images/loc.png') }}" alt="Locaux disponibles" style="width: 50px; height: auto; margin-right: 15px;">
                        <div>
                            <p>
                                <strong>Tunis, Tunisie</strong><br>
                                Les Berges du Lac 2<br>
                                Tel : +216 31 320 123
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container my-5">
            <div class="row">
                <div class="col-md-4" data-aos="fade-up">
                    <div class="hover-image">
                        <img src="{{ asset('images/orientation.jpg') }}" alt="Photo 1" class="img-fluid">
                        <div class="overlay">
                            <p>Des spécialistes vous aident à mettre en valeur vos compétences,
                                à vous orienter afin de pouvoir choisir le cursus qui vous correspond le mieux,
                                à fixer vos objectifs et à mettre en avant vos talents.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4" data-aos="fade-up">
                    <div class="hover-image">
                        <img src="{{ asset('images/acc.png') }}" alt="Photo 2" class="img-fluid">
                        <div class="overlay">
                            <p>Un soutien permanent et sans faille tout au long de la période 
                                de la réalisation du dossier jusqu'à la préparation de votre entretien.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4" data-aos="fade-up">
                    <div class="hover-image">
                        <img src="{{ asset('images/conseil.jpg') }}" alt="Photo 3" class="img-fluid">
                        <div class="overlay">
                            <p>Des conseillers expérimentés vous guident dans votre choix de parcours, 
                                vous aident à réussir votre projet d’étude et à améliorer vos chances d’approbation.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
@endsection
