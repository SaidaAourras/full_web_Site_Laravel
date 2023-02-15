@extends('layouts.base-pages')

@section('title', 'Global Marketing Consulting Maroc')

@section('sections.container')



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


                </div>

            </div>
        </div>
        {{-- <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
            <h1 class="mb-0 mt-5">Pour nous  le point de départ, c'est vous </h1>
        </div> --}}
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
