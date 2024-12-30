@extends('layouts.layout')
@section('title', 'Services')

@section('content')
  <style>
    .row.content {min-height: 100vh;} 
    .sidenav {
      background-color: #f1f1f1;
      height: 100%;
    }
    .card {
      background-size: cover;
      background-position: center;
      color: white;
      position: relative;
      overflow: hidden;
      height: 220px; 
    }
    .card-title, .card-text {
      position: absolute;
      bottom: 10px;
      left: 10px;
      z-index: 1;
    }
    .card-bg {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      z-index: 0;
      opacity: 0.5;
    }
    .sidenav img {
      width: 100%;
      height: auto;
      max-height: 200px; 
      border-radius: 8px; 
      margin-top: 20px; 
    }
    @media screen and (max-width: 767px) {
      .row.content {height: auto;} 
    }
  </style>

<div class="container-fluid">
    <div class="row content">
      <div class="col-sm-3 sidenav hidden-xs">
        <h2>Edutranger</h2>
        <h4>Conseils pour vos études à l'étranger :</h4></br>
        <p>1. Préparez-vous en étudiant les options de visa et les conditions requises.</p>
        <p>2. Choisissez une université adaptée à votre domaine d'étude et à vos objectifs.</p>
        <p>3. Renseignez-vous sur les possibilités de bourses et de financement.</p>
        <p>4. Planifiez votre hébergement bien avant de partir.</p>
        <p>5. Familiarisez-vous avec la culture et les coutumes locales pour une intégration plus facile.</p>
        <p>6. Préparez-vous pour les examens de langue nécessaires (TOEFL, IELTS, etc.).</p>
        <p>7. Créez un réseau d'anciens étudiants ou rejoignez des groupes d'expatriés pour obtenir des conseils et un soutien pendant votre séjour.</p>

        <img src="images/derniere.gif" alt="Conseils pour études à l'étranger">
        <img src="images/der.jpg" alt="Conseils pour études à l'étranger"></br>
      </div>
    
    <div class="col-sm-9">
      <div class="well">
        <h4>Nos Services</h4>
      </div>
      
      <div class="row">
        <div class="col-md-4 mb-4">
          <div class="card" style="background-image: url('images/orientation2.webp');">
            <div class="card-bg"></div>
            <div class="card-body">
              <h4 class="card-title">Orientation</h4>
            </div>
          </div>
        </div>
        <div class="col-md-4 mb-4">
          <div class="card" style="background-image: url('images/assistance.avif');">
            <div class="card-bg"></div>
            <div class="card-body">
              <h4 class="card-title">Assistance Admission</h4>
            </div>
          </div>
        </div>
        <div class="col-md-4 mb-4">
          <div class="card" style="background-image: url('images/visa.jpg');">
            <div class="card-bg"></div>
            <div class="card-body">
              <h4 class="card-title">Visa Assistance</h4>
            </div>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-md-6 mb-4">
          <div class="card" style="background-image: url('images/exams.jpg');">
            <div class="card-bg"></div>
            <div class="card-body">
              <h4 class="card-title">Préparation Examens</h4>
            </div>
          </div>
        </div>
        <div class="col-md-6 mb-4">
          <div class="card" style="background-image: url('images/bourses.jpeg');">
            <div class="card-bg"></div>
            <div class="card-body">
              <h4 class="card-title">Bourses d'Études</h4>
            </div>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-md-8 mb-4">
          <div class="card" style="background-image: url('images/suivi.png'); height: 250px;">
            <div class="card-bg"></div>
            <div class="card-body">
              <h4 class="card-title">Suivi Personnalisé</h4>
            </div>
          </div>
        </div>
        <div class="col-md-4 mb-4">
          <div class="card" style="background-image: url('images/emp.png'); height: 250px;">
            <div class="card-bg"></div>
            <div class="card-body">
              <h4 class="card-title">Emploi et Stage</h4>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-8 mb-4">
          <div class="card" style="background-image: url('images/logement.jpg'); height: 250px;">
            <div class="card-bg"></div>
            <div class="card-body">
              <h4 class="card-title">Logement</h4>
            </div>
          </div>
        </div>
        <div class="col-md-4 mb-4">
          <div class="card" style="background-image: url('images/integration.jpg'); height: 250px;">
            <div class="card-bg"></div>
            <div class="card-body">
              <h4 class="card-title">Intégration Culturelle</h4>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection
