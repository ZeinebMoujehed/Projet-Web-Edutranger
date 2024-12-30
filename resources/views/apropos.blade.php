@extends('layouts.layout')

@section('title', 'À propos')

@section('content')

<style>
    .about-section {
        padding: 60px 0;
        background-color: #f8f9fa;
    }

    .about-section h2 {
        text-align: center;
        margin-bottom: 40px;
        font-size: 2.5rem;
        color: #343a40;
    }

    .about-section p {
        text-align: center;
        font-size: 1.1rem;
        line-height: 1.6;
        margin-bottom: 30px;
    }

    .team-title {
        text-align: center;
        margin-top: 50px;
        font-size: 2rem;
        color: #495057;
    }

    .team-member {
        text-align: center;
        margin: 20px;
        transition: transform 0.3s;
    }

    .team-member:hover {
        transform: scale(1.05);
    }

    .team-member img {
        width: 180px;
        height: 180px;
        border-radius: 50%;
        border: 4px solid #04361b;
        margin-bottom: 10px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
    }

    .team-member h4 {
        margin: 10px 0;
        font-size: 1.5rem;
        color: #04361b;
    }

    .team-member p {
        font-size: 1rem;
        color: #6c757d;
    }

    .values-section {
        margin-top: 50px;
        background-color: #fff;
        padding: 30px;
        border-radius: 8px;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
    }

    .values-section h3 {
        text-align: center;
        margin-bottom: 20px;
        font-size: 2rem;
        color: #495057;
    }

    .values-section ul {
        list-style-type: none;
        padding: 0;
    }

    .values-section li {
        font-size: 1.1rem;
        margin: 10px 0;
    }

    .contact-section {
        text-align: center;
        margin-top: 50px;
        font-size: 1.2rem;
    }

    .contact-section a {
        color: #04361b;
        text-decoration: none;
    }
</style>

<div class="about-section">
    <div class="container">
        <h2>À propos de nous</h2>
        <p>
             Nous sommes une organisation dédiée à l'accompagnement des étudiants dans leur parcours éducatif. Notre mission est de fournir des services de qualité qui aident nos clients à atteindre leurs objectifs académiques et professionnels.
        </p>
        <p>
            Nous croyons fermement que chaque étudiant mérite le soutien nécessaire pour réussir. C'est pourquoi nous offrons une gamme de services, y compris l'orientation académique, l'assistance à l'admission, et bien plus encore.
        </p>

        <div class="team-title">Notre Équipe</div>
        <div class="row text-center justify-content-center">
            <div class="col-md-4 team-member">
                <div class="d-flex flex-column align-items-center">
                    <img src="{{ asset('images/photo_cv.jpg') }}" alt="Membre de l'équipe 1" class="img-fluid">
                    <h4>Zeineb Moujehed</h4>
                    <p>Directrice Générale</p>
                </div>
            </div>
            <div class="col-md-4 team-member">
                <div class="d-flex flex-column align-items-center">
                    <img src="{{ asset('images/noussa.jpg') }}" alt="Membre de l'équipe 2" class="img-fluid">
                    <h4>Ons Reagen</h4>
                    <p>Responsable de l'Orientation</p>
                </div>
            </div>
        </div>
        

        <div class="values-section">
            <h3>Nos Valeurs</h3>
            <ul>
                <li><strong>Engagement :</strong> Nous nous engageons à fournir un service de qualité à tous nos clients.</li>
                <li><strong>Intégrité :</strong> Nous agissons avec honnêteté et transparence dans tout ce que nous faisons.</li>
                <li><strong>Innovation :</strong> Nous cherchons constamment des moyens d'améliorer nos services et d'innover dans notre approche.</li>
            </ul>
        </div>

        <div class="contact-section">
            <h3>Contactez-nous</h3>
            <p>Pour toute question ou demande d'information, n'hésitez pas à nous contacter à <a href="mailto:contact@edutranger.com">contact@edutranger.com</a>.</p>
        </div>
    </div>
</div>

@endsection
