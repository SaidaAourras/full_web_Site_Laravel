@extends('layouts.base-pages')

@section('title', 'Global Marketing Consulting Maroc')

@section('sections.container')


    <style>
        .flip-box {
            background-color: transparent;
            width: 200px;
            height: 100px;
            /* border: 1px solid #f1f1f1; */
            perspective: 1000px;
            /* Remove this if you don't want the 3D effect */
        }

        /* This container is needed to position the front and back side */
        .flip-box-inner {
            position: relative;
            width: 100%;
            height: 100%;
            text-align: center;
            transition: transform 0.8s;
            transform-style: preserve-3d;
        }

        /* Do an horizontal flip when you move the mouse over the flip box container */
        .flip-box:hover .flip-box-inner {
            transform: rotateY(180deg);
        }

        /* Position the front and back side */
        .flip-box-front,
        .flip-box-back {
            position: absolute;
            width: 100%;
            height: 100%;
            -webkit-backface-visibility: hidden;
            /* Safari */
            backface-visibility: hidden;
        }

        /* Style the front side (fallback if image is missing) */
        .flip-box-front {
            /* background-color: #bbb;
                                                                                                color: black; */
        }

        /* Style the back side */
        .flip-box-back {
            /* background-color: dodgerblue;
                                                                                                color: white; */
            transform: rotateY(180deg);
        }

        .image {
            width: 9rem;
        }
    </style>
    <!-- About Start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-5" style="min-height: 500px;">
                    <div id="position-relative" class="position-relative h-100">
                        <img class="position-absolute w-100 h-100 rounded wow zoomIn" data-wow-delay="0.9s"
                            src="addons/img/about.png" style="object-fit: cover;">
                    </div>
                </div>
                <div style="margin-top: 8rem" class="col-lg-7 m-auto">
                    <div class="section-title position-relative pb-3 mb-5">
                        <h3 class="mb-0">Global Marketing Consulting,
                            La seule distance qui nous sépare, c’est un nouveau départ</h3>
                    </div>
                    <h4 style="color: #1BAC92">Pour nous le point de départ, c'est vous</h4>
                    <p class="mb-4">Faisons le point pour définir vos besoins, vos objectifs, vos ambitions. Ensemble,
                        nous partirons de ce point pour tracer une ligne, suite de points stratégiques dessinant votre
                        nouvel horizon.</p>
                    <h4 style="color: #1BAC92">Entre nous, les liens ne sont pas seulement hypertextes.</h4>
                    <p class="mb-4">D’abord, il y a une rencontre et une écoute active. Entre vous et nous. Entre votre
                        problématique et notre expertise. Et puis les liens se tissent, la relation s’enrichit, les
                        stratégies et les solutions pertinentes naissent. Pour nous, il y a autant de rencontres que de
                        clients, avec chaque fois, des lignes d’horizon sur mesure et différentes, issues d’une réflexion
                        commune.</p>
                    <a href="quote.html" class="btn btn-primary py-3 px-5 mt-3 wow zoomIn" data-wow-delay="0.9s"
                        style="visibility: visible; animation-delay: 0.9s; animation-name: zoomIn;">Contactez-nous</a>


                </div>

            </div>

            <div class="container py-5">
                {{-- <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">

                    <h2 class="mb-0">RÉALISONS ENSEMBLE VOTRE PROJET</h2>
                    <h6 class="mb-0">Entrez vos coordonnées et nous vous recontacterons dans les plus brefs délais !</h6>
                </div> --}}
                <div class="row g-5 mb-5 mt-5">

                    <h4 style="color: #1BAC92">Pour nous le point de départ, c'est vous</h4>
                    <p class="mt-1">GMC vous rassure un positionnement plus qualitatif, grâce à sa stratégie déterminée
                        dans les 6 solutions proposées :</p>
                    <div class="row g-3">
                        <div class="col-lg-2 col-md-6 wow zoomIn" data-wow-delay="0.3s"
                            style="visibility: visible; animation-delay: 0.3s; animation-name: zoomIn;">
                            <div class="flip-box">
                                <div class="flip-box-inner">
                                    <div class="flip-box-front">
                                        <img class="image" src="addons/img/solutions_gmc_digital.png">
                                    </div>
                                    <div class="flip-box-back">
                                        <img class="image" src="addons/img/solutions_gmc_digital.png">

                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="col-lg-2 col-md-6 wow zoomIn" data-wow-delay="0.6s"
                            style="visibility: visible; animation-delay: 0.6s; animation-name: zoomIn;">
                            <div class="flip-box">
                                <div class="flip-box-inner">
                                    <div class="flip-box-front">
                                        <img class="image" src="addons/img/solutions_gmc_print.png">
                                    </div>
                                    <div class="flip-box-back">
                                        <img class="image" src="addons/img/solutions_gmc_print.png">

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-6 wow zoomIn" data-wow-delay="0.6s"
                            style="visibility: visible; animation-delay: 0.6s; animation-name: zoomIn;">
                            <div class="flip-box">
                                <div class="flip-box-inner">
                                    <div class="flip-box-front">
                                        <img class="image" src="addons/img/solutions_gmc_edit.png">
                                    </div>
                                    <div class="flip-box-back">
                                        <img class="image" src="addons/img/solutions_gmc_edit.png">

                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="col-lg-2 col-md-6 wow zoomIn" data-wow-delay="0.3s"
                            style="visibility: visible; animation-delay: 0.3s; animation-name: zoomIn;">
                            <div class="flip-box">
                                <div class="flip-box-inner">
                                    <div class="flip-box-front">
                                        <img class="image" src="addons/img/solutions_gmc_visuel.png">
                                    </div>
                                    <div class="flip-box-back">
                                        <img class="image" src="addons/img/solutions_gmc_visuel.png">

                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="col-lg-2 col-md-6 wow zoomIn" data-wow-delay="0.6s"
                            style="visibility: visible; animation-delay: 0.6s; animation-name: zoomIn;">
                            <div class="flip-box">
                                <div class="flip-box-inner">
                                    <div class="flip-box-front">
                                        <img class="image" src="addons/img/solutions_gmc_design.png">
                                    </div>
                                    <div class="flip-box-back">
                                        <img class="image" src="addons/img/solutions_gmc_design.png">

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-6 wow zoomIn" data-wow-delay="0.6s"
                            style="visibility: visible; animation-delay: 0.6s; animation-name: zoomIn;">
                            <div class="flip-box">
                                <div class="flip-box-inner">
                                    <div class="flip-box-front">
                                        <img class="image" src="addons/img/solutions_gmc_tech.png">
                                    </div>
                                    <div class="flip-box-back">
                                        <img class="image" src="addons/img/solutions_gmc_tech.png">

                                    </div>
                                </div>
                            </div>

                        </div>


                    </div>
                    <p class="mt-1">Qui forment un cabinet de communication globale, apte à résoudre toutes vos «
                        équations
                        communication » et prendre votre marque avec succès à une toute nouvelle demande.</p>

                    <h4 style="color: #1BAC92">Nos objectifs nourrissent votre ambition
                    </h4>
                    <p class="mt-1">En période faste comme en temps de crise, nous vous accompagnons vers de nouveaux
                        horizons, nous élaborons pour vous une communication riche de sens, porteuse de valeurs et «
                        différenciante ». Notre conviction : rien ne peut être formaté ni pré-pensé, tout se dessine peu à
                        peu en fonction de votre personnalité et de vos enjeux.</p>

                    <h4 style="color: #1BAC92">Ensemble, nous dessinons vos lignes… Nous traçons votre route…
                    </h4>
                    <p class="mt-1">En ligne de mire, la satisfaction de nos clients, certains nous font confiance,
                        d’autres nous ont choisi au fil des années. Depuis plus de 10 ans, l’expérience acquise à leurs
                        côtés nous permet de développer une réelle connaissance terrain et une capacité d’analyse pertinente
                        des réseaux d’influence.</p>
                </div>



            </div>
        </div>
        {{-- <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
            <h1 class="mb-0 mt-5">Pour nous  le point de départ, c'est vous </h1>
        </div> --}}

        <!-- Testimonial Start -->
        <div class="container-fluid wow fadeInUp" data-wow-delay="0.1s">
            <div class="container">
                <div class="section-title text-center position-relative pb-3 mb-4 mx-auto" style="max-width: 600px;">
                    <h5 class="fw-bold text-primary text-uppercase">TÉMOIGNAGE</h5>
                    <h3 class="mb-0">Ce que nos clients disent de nos services numériques</h3>
                </div>
                <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.6s">
                    <div class="testimonial-item bg-light my-4">
                        <div class="d-flex align-items-center border-bottom pt-5 pb-4 px-5">
                            <img class="img-fluid rounded" src="addons/img/testimonial-1.jpg"
                                style="width: 60px; height: 60px;">
                            <div class="ps-4">
                                <h4 class="text-primary mb-1">Client Name</h4>
                                <small class="text-uppercase">Profession</small>
                            </div>
                        </div>
                        <div class="pt-4 pb-5 px-5">
                            Dolor et eos labore, stet justo sed est sed. Diam sed sed dolor stet amet eirmod eos labore diam
                        </div>
                    </div>
                    <div class="testimonial-item bg-light my-4">
                        <div class="d-flex align-items-center border-bottom pt-5 pb-4 px-5">
                            <img class="img-fluid rounded" src="addons/img/testimonial-2.jpg"
                                style="width: 60px; height: 60px;">
                            <div class="ps-4">
                                <h4 class="text-primary mb-1">Client Name</h4>
                                <small class="text-uppercase">Profession</small>
                            </div>
                        </div>
                        <div class="pt-4 pb-5 px-5">
                            Dolor et eos labore, stet justo sed est sed. Diam sed sed dolor stet amet eirmod eos labore diam
                        </div>
                    </div>
                    <div class="testimonial-item bg-light my-4">
                        <div class="d-flex align-items-center border-bottom pt-5 pb-4 px-5">
                            <img class="img-fluid rounded" src="addons/img/testimonial-3.jpg"
                                style="width: 60px; height: 60px;">
                            <div class="ps-4">
                                <h4 class="text-primary mb-1">Client Name</h4>
                                <small class="text-uppercase">Profession</small>
                            </div>
                        </div>
                        <div class="pt-4 pb-5 px-5">
                            Dolor et eos labore, stet justo sed est sed. Diam sed sed dolor stet amet eirmod eos labore diam
                        </div>
                    </div>
                    <div class="testimonial-item bg-light my-4">
                        <div class="d-flex align-items-center border-bottom pt-5 pb-4 px-5">
                            <img class="img-fluid rounded" src="addons/img/testimonial-4.jpg"
                                style="width: 60px; height: 60px;">
                            <div class="ps-4">
                                <h4 class="text-primary mb-1">Client Name</h4>
                                <small class="text-uppercase">Profession</small>
                            </div>
                        </div>
                        <div class="pt-4 pb-5 px-5">
                            Dolor et eos labore, stet justo sed est sed. Diam sed sed dolor stet amet eirmod eos labore diam
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Testimonial End -->
    </div>
    <!-- About End -->

    <script>
        const element = document.getElementById("chnageTitle");
        element.innerHTML = "À propos ";
        document.getElementById('img-bg-header').style.background = "url(addons/img/Image.png) center center no-repeat ";
        document.getElementById('img-bg-header').style.backgroundSize = "cover";
        /* background: linear-gradient(rgb(33 35 38 / 49%), rgb(33 35 38 / 49%)), url(../img/carousel-1.jpg) center center no-repeat; */
    </script>
@endsection
