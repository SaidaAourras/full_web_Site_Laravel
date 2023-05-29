@extends('layouts.base-pages')

@section('title', 'Global Marketing Consulting Maroc')

@section('sections.container')

    <style>
        /* @import url('https://fonts.googleapis.com/css2?family=Redressed&family=Merriweather:wght@300;400;700&display=swap'); */

        .fa-check:before {
            content: "\f00c";
            padding-right: 0.5rem;
        }

        .offre-list {
            display: grid;
            grid-template-columns: 1fr 1fr 1fr 1fr 1fr;
            grid-gap: 5px;
        }

        .offre-item>.front {
            transform: rotateY(0deg);
        }

        .offre-item>.front,
        .offre-item>.back {
            background-color: white;
            display: block;
            transition-timing-function: cubic-bezier(0.175, 0.885, 0.32, 1.275);
            transition-duration: 0.5s;
            transition-property: transform, opacity;
        }

        .offre-item>.back {
            position: absolute;
            opacity: 0;
            top: 0px;
            left: 0px;
            width: 100%;
            height: 100%;
            transform: rotateY(-180deg);
        }

        .offre-item>.front,
        .offre-item>.back {
            background-color: white;
            display: block;
            transition-timing-function: cubic-bezier(0.175, 0.885, 0.32, 1.275);
            transition-duration: 0.5s;
            transition-property: transform, opacity;
        }

        .card {
            position: relative;
            display: flex;
            flex-direction: column;
            min-width: 0;
            word-wrap: break-word;
            background-color: #fff;
            background-clip: border-box;
            border: 1px solid rgba(0, 0, 0, 0.125);
            border-radius: 0.25rem;
        }

        .standar-background {
            background-color: rgb(29, 112, 184);
            color: white;
        }

        .premium-background {
            background-color: rgb(162, 25, 91);
            color: white;
        }

        .gold-background {
            background-color: rgb(176, 125, 50);
            color: white;
        }

        .platinium-background {
            background-color: rgb(234, 90, 42);
            /* border-radius: 0px 15px 0px 0px; */
            color: white;
        }

        .offre-description-item {
            font-size: 1rem;
            F
        }

        .basic-background {
            background-color: rgb(10, 174, 151);
            /* border-radius: 10px 0px 0px 0px; */
            color: white;
        }

        .card-body {
            flex: 1 1 auto;
            padding: 1rem 1rem;
        }

        .offre-title {
            font-size: large;
            font-weight: bold;
            font-family: 'Nunito', sans-serif;
        }

        .offre-item {
            position: relative;
        }

        .card-header {
            border-bottom: none;
        }

        .redressed {
            font-family: 'Nunito', sans-serif;

        }

        .merriweather {
            font-family: 'Nunito', sans-serif;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        html,
        body {
            width: 100%;
            height: 100%;
            font-size: 100%;

        }

        body {
            /* display: grid; */
            place-items: center;
            font-family: 'Nunito', sans-serif !important;

            /* overflow: hidden; */
        }

        .card {
            border: none;
            text-align: initial;
            font-family: 'Nunito', sans-serif;

        }

        .cc-menu {
            background: transparent;


        }

        .solution-web {
            display: grid;
            grid-template-columns: 1fr 1fr 1fr 1fr;
            grid-gap: 10px;
        }

        .solution-web .solution-web-card {
            padding: 10px;
            border-radius: 5px;
            background-color: white;
            box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
            /* height: 300px; */
        }

        .solution-web .solution-web-card .solution-web-card-header {
            display: flex;
            justify-content: space-between;
            font-family: 'Nunito', sans-serif;
            font-weight: bold;
            margin-bottom: 10px;
        }

        .solution-web .solution-web-card .solution-web-card-body {
            background-color: #009fe33b;
            font-family: 'Nunito', sans-serif;
            color: black;
            width: 100%;
            height: 90%;
            border-radius: 5px;
            padding: 10px;
        }

        .solution-web-card-body-item {
            font-size: 1rem;
            text-align: initial;
        }

        #nav-tabContent {
            margin-top: 2rem
        }

        .box-container {
            display: grid;
            grid-template-columns: 1fr 1fr 1fr 1fr;
            grid-gap: 10px;
        }

        .card-box {
            float: left;
            font-size: 1.2em;
            margin: 1% 0 0 1%;
            perspective: 800px;
            transition: all 0.3s ease 0s;
        }

        .card-box:hover .card-package {
            transform: rotateY(180deg);
        }

        .card-box .card-package {
            cursor: default;
            height: 200px;
            border-radius: 5px;
            box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
            transform-style: preserve-3d;
            transition: transform 0.4s ease 0s;
            width: 100%;
            -webkit-animation: giro 1s 1;
            animation: giro 1s 1;
        }

        .card-box .card-package .front,
        .card-box .card-package .back {
            backface-visibility: hidden;
            box-sizing: border-box;
            color: white;
            display: block;
            height: 100%;
            border-radius: 5px;
            padding: 0.2rem 2rem 1rem 2rem;
            position: absolute;
            width: 100%;
        }

        .card-box .card-package .back {
            transform: rotateY(180deg);
        }

        .card-box:nth-child(2) .card-package {
            -webkit-animation: giro 1.5s 1;
            animation: giro 1.5s 1;
        }

        .card-box:nth-child(3) .card-package {
            -webkit-animation: giro 2s 1;
            animation: giro 2s 1;
        }

        .card-box:nth-child(4) .card-package {
            -webkit-animation: giro 2.5s 1;
            animation: giro 2.5s 1;
        }

        @-webkit-keyframes giro {
            from {
                transform: rotateY(180deg);
            }

            to {
                transform: rotateY(0deg);
            }
        }

        @keyframes giro {
            from {
                transform: rotateY(180deg);
            }

            to {
                transform: rotateY(0deg);
            }
        }

        @media screen and (max-width: 767px) {
            .card-box {
                margin-left: 2.8%;
                margin-top: 3%;
                width: 46%;
            }

            .card-box .card-package {
                height: 285px;
            }

            .card-box:last-child {
                margin-bottom: 3%;
            }
        }

        @media screen and (max-width: 480px) {
            .card-box {
                width: 94.5%;
            }

            .card-box .card-package {
                height: 260px;
            }
        }

        /* colors */
        .package-start {
            color: rgb(215, 129, 10)
        }

        .package-presence {
            color: rgb(159, 182, 8)
        }

        .package-essentiel {
            color: rgb(11, 92, 156)
        }

        .package-ecommerce {
            color: rgb(117, 63, 25)
        }

        .package-background-start {
            background-color: rgb(215, 129, 10)
        }

        .package-background-presence {
            background-color: rgb(159, 182, 8)
        }

        .package-background-essentiel {
            background-color: rgb(11, 92, 156)
        }

        .package-background-ecommerce {
            background-color: rgb(117, 63, 25)
        }

        .package-container {
            position: absolute;
            right: 15px;
            top: 70px;
        }

        .package-container .package-web-pack {
            font-family: 'Nunito', sans-serif;
            font-size: small;
        }

        .package-container .package-title {
            font-family: 'Nunito', sans-serif;
            font-size: large;
            text-transform: uppercase;
        }

        .package-container .package-description {
            font-family: 'Nunito', sans-serif;
            font-size: small;
        }

        .package-container-back {
            font-family: 'Nunito', sans-serif;
        }

        .package-container-back .package-back-title {
            font-family: 'Nunito', sans-serif;
            text-transform: uppercase;
        }

        .package-container-back .package-back-description {
            font-family: 'Nunito', sans-serif;
            font-size: 0.7rem;
            text-align: initial;

        }

        .package-container-back .package-back-list {
            font-family: 'Nunito', sans-serif;
            margin-top: 10px;
        }

        .package-container-back .package-back-list-item {
            font-family: 'Nunito', sans-serif;
            font-size: small;
            text-align: initial
        }

        @media only screen and (max-width: 600px) {
            .solution-web {
                grid-template-columns: 1fr;
            }

            .r-tabs .r-tabs-nav {
                display: none !important;
            }

        }

        @media only screen and (max-width: 992px) {
            .offre-list {
                grid-template-columns: 1fr;
            }

            #solution-web {
                display: grid;
                grid-template-columns: 1fr;
                grid-gap: 10px;
                padding: 2rem 0 0 0;
            }

            .card-box .card-package .front,
            .card-box .card-package .back {
                backface-visibility: hidden;
                box-sizing: border-box;
                color: white;
                display: block;
                height: 100%;
                border-radius: 5px;
                padding: 1.2rem 2rem 1rem 2rem;
                position: absolute;
                width: 100%;
            }

        }
    </style>

    {{-- vvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvv --}}

    <section class="cc-menu merriweather py-5">
        <div class="container">
            <div class="row">
                <div class="card bg-transparent text-center mb-4">
                    {{-- <div class="card-body text-dark">
                        <p class="card-text">Chez "GMC", nous nous engageons à offrir à chaque client une stratégie et des
                            idées de création adaptées à leurs besoins. Nous sommes là pour donner vie à vos projets .</p>
                    </div> --}}
                    <div class="card-header bg-transparent  merriweather fs-4">
                        <nav>
                            <div class="nav nav-tabs justify-content-center " id="nav-tab" role="tablist">
                                <button class="nav-link active bg-nav-link" id="nav-print-tab" data-bs-toggle="tab"
                                    data-bs-target="#nav-print" type="button" role="tab" aria-controls="nav-print"
                                    aria-selected="true"><img src="http://localhost:8000/addons/img/gmc_print.png"
                                        alt="" style="width:100px">
                                </button>
                                <button class="nav-link" id="nav-digital-tab" data-bs-toggle="tab"
                                    data-bs-target="#nav-digital" type="button" role="tab" aria-controls="nav-digital"
                                    aria-selected="false"><img src="http://localhost:8000/addons/img/gmc_digital.png"
                                        alt="" style="width:100px">
                                </button>
                                <button class="nav-link" id="nav-visaul-tab" data-bs-toggle="tab"
                                    data-bs-target="#nav-visual" type="button" role="tab" aria-controls="nav-visual"
                                    aria-selected="false"><img src="http://localhost:8000/addons/img/gmc_visuel.png"
                                        alt=""style="width:100px">
                                </button>
                                <button class="nav-link" id="nav-edit-tab" data-bs-toggle="tab" data-bs-target="#nav-edit"
                                    type="button" role="tab" aria-controls="nav-edit" aria-selected="false"><img
                                        src="http://localhost:8000/addons/img/gmc_edit.png"
                                        alt=""style="width:100px">
                                </button>
                                <button class="nav-link" id="nav-design-tab" data-bs-toggle="tab"
                                    data-bs-target="#nav-design" type="button" role="tab" aria-controls="nav-design"
                                    aria-selected="false"><img src="http://localhost:8000/addons/img/gmc_design.png"
                                        alt=""style="width:100px">
                                </button>
                                <button class="nav-link" id="nav-tech-tab" data-bs-toggle="tab" data-bs-target="#nav-tech"
                                    type="button" role="tab" aria-controls="nav-tech" aria-selected="false"><img
                                        src="http://localhost:8000/addons/img/gmc_tech.png"
                                        alt=""style="width:100px">
                                </button>
                            </div>
                        </nav>
                        <div class="tab-content" id="nav-tabContent">
                            <div class="tab-pane fade show active" id="nav-print" role="tabpanel"
                                aria-labelledby="nav-print-tab">

                                <h4 style="color: #009FE3;margin:2.5rem 0">Solutions Print &amp; Publicité</h4>
                                <div id="solution-pubs" class="solution-web">
                                    <div class="solution-web-card noselect">
                                        <div class="solution-web-card-header">
                                            <div style="color: rgb(0, 159, 227); font-size: small;"> Identité visuelle
                                            </div>
                                            <div content="Cliquez ici pour cacher" data-tippy-directive="" tabindex="0"><i
                                                    style="color: rgb(0, 159, 227); cursor: pointer;"></i></div>
                                        </div>
                                        <div class="solution-web-card-body fadeInOut">
                                            <div class="solution-web-card-body-item"> Recherche de
                                                nom
                                            </div>
                                            <div class="solution-web-card-body-item"> Signature
                                            </div>
                                            <div class="solution-web-card-body-item"> Logotype
                                            </div>
                                            <div class="solution-web-card-body-item"> Identité
                                                visuelle
                                            </div>
                                            <div class="solution-web-card-body-item"> Charte
                                                graphique
                                            </div>
                                            <div class="solution-web-card-body-item"> Icônes
                                            </div>
                                            <div class="solution-web-card-body-item">
                                                Pictogramme
                                            </div>
                                            <div class="solution-web-card-body-item"> Conception
                                                / rédaction...
                                            </div>
                                        </div>
                                    </div>
                                    <div class="solution-web-card noselect">
                                        <div class="solution-web-card-header">
                                            <div style="color: rgb(0, 159, 227); font-size: small;"> Impression offset
                                                commerciaux </div>
                                            <div content="Cliquez ici pour cacher" data-tippy-directive=""
                                                tabindex="0"><i style="color: rgb(0, 159, 227); cursor: pointer;"></i>
                                            </div>
                                        </div>
                                        <div class="solution-web-card-body fadeInOut">
                                            <div class="solution-web-card-body-item"> Cartes
                                                commerciales
                                            </div>
                                            <div class="solution-web-card-body-item"> Affiche,
                                                prospectus
                                            </div>
                                            <div class="solution-web-card-body-item"> Logotype
                                            </div>
                                            <div class="solution-web-card-body-item"> Brochures
                                            </div>
                                            <div class="solution-web-card-body-item"> Dépliants
                                            </div>
                                            <div class="solution-web-card-body-item"> Dossier
                                                porte-documents
                                            </div>
                                            <div class="solution-web-card-body-item"> Couverture
                                                document
                                            </div>
                                            <div class="solution-web-card-body-item"> Fiche
                                                technique
                                            </div>
                                            <div class="solution-web-card-body-item">
                                                Calendriers
                                            </div>
                                            <div class="solution-web-card-body-item">
                                                Autocollants, ...
                                            </div>
                                        </div>
                                    </div>
                                    <div class="solution-web-card noselect">
                                        <div class="solution-web-card-header">
                                            <div style="color: rgb(0, 159, 227); font-size: small;"> Impression offset
                                                administratifs </div>
                                            <div content="Cliquez ici pour cacher" data-tippy-directive=""
                                                tabindex="0"><i style="color: rgb(0, 159, 227); cursor: pointer;"></i>
                                            </div>
                                        </div>
                                        <div class="solution-web-card-body fadeInOut">
                                            <div class="solution-web-card-body-item"> Carte de
                                                visite
                                            </div>
                                            <div class="solution-web-card-body-item"> Facture en
                                                carnets
                                            </div>
                                            <div class="solution-web-card-body-item"> Papier
                                                entête
                                            </div>
                                            <div class="solution-web-card-body-item"> Enveloppe
                                            </div>
                                            <div class="solution-web-card-body-item"> Carnet de
                                                bon
                                            </div>
                                            <div class="solution-web-card-body-item"> Bons
                                                d’entrée / de sortie
                                            </div>
                                            <div class="solution-web-card-body-item"> Dossier
                                                chemise
                                            </div>
                                            <div class="solution-web-card-body-item"> Chemise
                                                bulle
                                            </div>
                                            <div class="solution-web-card-body-item"> Fiches
                                            </div>
                                            <div class="solution-web-card-body-item"> Cachets,
                                                tampons en bois ...
                                            </div>
                                        </div>
                                    </div>
                                    <div class="solution-web-card noselect">
                                        <div class="solution-web-card-header">
                                            <div style="color: rgb(0, 159, 227); font-size: small;"> Impression offset
                                                industriels </div>
                                            <div content="Cliquez ici pour cacher" data-tippy-directive=""
                                                tabindex="0"><i style="color: rgb(0, 159, 227); cursor: pointer;"></i>
                                            </div>
                                        </div>
                                        <div class="solution-web-card-body fadeInOut">
                                            <div class="solution-web-card-body-item"> Étiquettes
                                            </div>
                                            <div class="solution-web-card-body-item">
                                                Autocollants
                                            </div>
                                            <div class="solution-web-card-body-item"> Étuis
                                            </div>
                                            <div class="solution-web-card-body-item"> Packaging
                                                ...
                                            </div>
                                        </div>
                                    </div>
                                    <div class="solution-web-card noselect">
                                        <div class="solution-web-card-header">
                                            <div style="color: rgb(0, 159, 227); font-size: small;"> Impression numérique /
                                                Petit format </div>
                                            <div content="Cliquez ici pour cacher" data-tippy-directive=""
                                                tabindex="0"><i style="color: rgb(0, 159, 227); cursor: pointer;"></i>
                                            </div>
                                        </div>
                                        <div class="solution-web-card-body fadeInOut">
                                            <div class="solution-web-card-body-item"> Carte de
                                                visite
                                            </div>
                                            <div class="solution-web-card-body-item">
                                                Invitations
                                            </div>
                                            <div class="solution-web-card-body-item"> Tête de
                                                lettre
                                            </div>
                                            <div class="solution-web-card-body-item"> Menus
                                            </div>
                                            <div class="solution-web-card-body-item"> Flyers
                                            </div>
                                            <div class="solution-web-card-body-item"> Dépliants
                                            </div>
                                            <div class="solution-web-card-body-item">
                                                Calendriers personnalisés
                                            </div>
                                            <div class="solution-web-card-body-item"> Rapports
                                            </div>
                                            <div class="solution-web-card-body-item"> Chemise à
                                                rabat
                                            </div>
                                            <div class="solution-web-card-body-item"> Affiche
                                            </div>
                                            <div class="solution-web-card-body-item">
                                                Autocollant avec découpe,...
                                            </div>
                                        </div>
                                    </div>
                                    <div class="solution-web-card noselect">
                                        <div class="solution-web-card-header">
                                            <div style="color: rgb(0, 159, 227); font-size: small;"> Impression numérique /
                                                Grand format </div>
                                            <div content="Cliquez ici pour cacher" data-tippy-directive=""
                                                tabindex="0"><i style="color: rgb(0, 159, 227); cursor: pointer;"></i>
                                            </div>
                                        </div>
                                        <div class="solution-web-card-body fadeInOut">
                                            <div class="solution-web-card-body-item"> Bâche
                                            </div>
                                            <div class="solution-web-card-body-item"> Bâche
                                                diffusant (Backlight)
                                            </div>
                                            <div class="solution-web-card-body-item"> Bâche
                                                grille
                                            </div>
                                            <div class="solution-web-card-body-item"> Adhésif
                                                vinyle
                                            </div>
                                            <div class="solution-web-card-body-item"> Oneway
                                            </div>
                                            <div class="solution-web-card-body-item"> Papier
                                                photo
                                            </div>
                                            <div class="solution-web-card-body-item"> Tissu...
                                            </div>
                                            <div class="solution-web-card-body-item">
                                                Fabrication tout support de signalisation
                                            </div>
                                        </div>
                                    </div>
                                    <div class="solution-web-card noselect">
                                        <div class="solution-web-card-header">
                                            <div style="color: rgb(0, 159, 227); font-size: small;"> Objets publicitaires /
                                                Textiles </div>
                                            <div content="Cliquez ici pour cacher" data-tippy-directive=""
                                                tabindex="0"><i style="color: rgb(0, 159, 227); cursor: pointer;"></i>
                                            </div>
                                        </div>
                                        <div class="solution-web-card-body fadeInOut">
                                            <div class="solution-web-card-body-item">
                                                Casquettes, Chapeaux
                                            </div>
                                            <div class="solution-web-card-body-item"> Chemise,
                                                Chemisier
                                            </div>
                                            <div class="solution-web-card-body-item"> Polo
                                                publicitaire
                                            </div>
                                            <div class="solution-web-card-body-item"> Gilet
                                            </div>
                                            <div class="solution-web-card-body-item"> Tee-shirt
                                                publicitaire
                                            </div>
                                            <div class="solution-web-card-body-item"> Tong &amp;
                                                autres chaussures
                                            </div>
                                            <div class="solution-web-card-body-item"> Textile de
                                                sécurité
                                            </div>
                                            <div class="solution-web-card-body-item"> Vêtement
                                                de sport
                                            </div>
                                            <div class="solution-web-card-body-item"> Vêtement
                                                professionnel
                                            </div>
                                            <div class="solution-web-card-body-item"> Textile
                                                sur mesure...
                                            </div>
                                        </div>
                                    </div>
                                    <div class="solution-web-card noselect">
                                        <div class="solution-web-card-header">
                                            <div style="color: rgb(0, 159, 227); font-size: small;"> Objets publicitaires /
                                                Signalisation </div>
                                            <div content="Cliquez ici pour cacher" data-tippy-directive=""
                                                tabindex="0"><i style="color: rgb(0, 159, 227); cursor: pointer;"></i>
                                            </div>
                                        </div>
                                        <div class="solution-web-card-body fadeInOut">
                                            <div class="solution-web-card-body-item"> Agenda
                                            </div>
                                            <div class="solution-web-card-body-item"> Clé USB
                                            </div>
                                            <div class="solution-web-card-body-item"> Montre et
                                                Bracelet
                                            </div>
                                            <div class="solution-web-card-body-item"> Verre et
                                                Tasse
                                            </div>
                                            <div class="solution-web-card-body-item"> Parapluie
                                            </div>
                                            <div class="solution-web-card-body-item"> Porte-clés
                                            </div>
                                            <div class="solution-web-card-body-item">
                                                Restauration
                                            </div>
                                            <div class="solution-web-card-body-item"> Sac et
                                                bagage
                                            </div>
                                            <div class="solution-web-card-body-item"> Stylo
                                                publicitaire
                                            </div>
                                            <div class="solution-web-card-body-item"> Vos objets
                                                sur mesure ...
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade available" id="nav-digital" role="tabpanel"
                                aria-labelledby="nav-digital-tab">
                                <h4 style="color: #E72787;margin:2.5rem 0">Solutions Web & Réseaux Sociaux</h4>

                                <div class="">
                                    <div id="tag-2" class="desc_solutions r-tabs-panel r-tabs-state-active"
                                        style="display: block;">
                                        <style>
                                            @import url('https://fonts.googleapis.com/css2?family=Spartan:wght@300&display=swap');
                                        </style>

                                        <br>
                                        <h3
                                            style="color: #6D8299;font-family: 'Nunito', sans-serif; font-size: 1.5rem;margin-bottom: 1rem;text-align: initial;">
                                            Packs Réseaux Sociaux</h3>
                                        <div class="offre-list">
                                            <div class="offre-item">
                                                <div class="front">
                                                    <div class="card">
                                                        <div class="card-body basic-background">
                                                            <div class="offre-title">
                                                                <i></i>
                                                                BASIC
                                                            </div>
                                                            <div class="offre-description">
                                                                <div class="offre-description-item">
                                                                    4 heures par mois </div>
                                                                <div class="offre-description-item">
                                                                    1 réseau au choix </div>
                                                                <div class="offre-description-item">
                                                                    1 publication par semaine </div>
                                                                <div class="offre-description-item">
                                                                    Animation et modération </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="back">
                                                    <div class="card">
                                                        <div class="card-body basic-background">
                                                            <div class="offre-title">
                                                                details
                                                            </div>
                                                            <div class="offre-description">
                                                                <div class="offre-description-item">
                                                                    Mise en ligne et Partage </div>
                                                                <div class="offre-description-item">
                                                                    <del>Gestion des contacts</del>
                                                                </div>
                                                                <div class="offre-description-item">
                                                                    <del>Création des maquette</del>
                                                                </div>
                                                                <div class="offre-description-item">
                                                                    <del>1 sondage par année</del>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="offre-item">
                                                <div class="front">
                                                    <div class="card">
                                                        <div class="card-body standar-background">
                                                            <div class="offre-title">
                                                                <i></i>
                                                                STANDAR
                                                            </div>
                                                            <div class="offre-description">
                                                                <div class="offre-description-item">
                                                                    8 heures par mois </div>
                                                                <div class="offre-description-item">
                                                                    1 réseau au choix </div>
                                                                <div class="offre-description-item">
                                                                    2 publication par semaine </div>
                                                                <div class="offre-description-item">
                                                                    Animation et modération </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="back">
                                                    <div class="card">
                                                        <div class="card-body standar-background">
                                                            <div class="offre-title">
                                                                details
                                                            </div>
                                                            <div class="offre-description">
                                                                <div class="offre-description-item">
                                                                    Mise en ligne et Partage </div>
                                                                <div class="offre-description-item">
                                                                    Gestion des contacts </div>
                                                                <div class="offre-description-item">
                                                                    Création des maquette </div>
                                                                <div class="offre-description-item">
                                                                    1 sondage par année </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="offre-item">
                                                <div class="front">
                                                    <div class="card">
                                                        <div class="card-body premium-background">
                                                            <div class="offre-title">
                                                                <i></i>
                                                                PREMIUM
                                                            </div>
                                                            <div class="offre-description">
                                                                <div class="offre-description-item">
                                                                    11 heures par mois </div>
                                                                <div class="offre-description-item">
                                                                    2 réseaux au choix </div>
                                                                <div class="offre-description-item">
                                                                    4 publication par semaine </div>
                                                                <div class="offre-description-item">
                                                                    Animation et modération </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="back">
                                                    <div class="card">
                                                        <div class="card-body premium-background">
                                                            <div class="offre-title">
                                                                details
                                                            </div>
                                                            <div class="offre-description">
                                                                <div class="offre-description-item">
                                                                    Mise en ligne et Partage </div>
                                                                <div class="offre-description-item">
                                                                    Gestion des contacts </div>
                                                                <div class="offre-description-item">
                                                                    Création des maquette </div>
                                                                <div class="offre-description-item">
                                                                    2 sondage par année </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="offre-item">
                                                <div class="front">
                                                    <div class="card">
                                                        <div class="card-body gold-background">
                                                            <div class="offre-title">
                                                                <i></i>
                                                                GOLD
                                                            </div>
                                                            <div class="offre-description">
                                                                <div class="offre-description-item">
                                                                    16 heures par mois </div>
                                                                <div class="offre-description-item">
                                                                    2 réseaux au choix </div>
                                                                <div class="offre-description-item">
                                                                    6 publication par semaine </div>
                                                                <div class="offre-description-item">
                                                                    Animation et modération </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="back">
                                                    <div class="card">
                                                        <div class="card-body gold-background">
                                                            <div class="offre-title">
                                                                details
                                                            </div>
                                                            <div class="offre-description">
                                                                <div class="offre-description-item">
                                                                    Mise en ligne et Partage </div>
                                                                <div class="offre-description-item">
                                                                    Gestion des contacts </div>
                                                                <div class="offre-description-item">
                                                                    Création des maquette </div>
                                                                <div class="offre-description-item">
                                                                    3 sondage par année </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="offre-item">
                                                <div class="front">
                                                    <div class="card">
                                                        <div class="card-body platinium-background">
                                                            <div class="offre-title">
                                                                <i></i>
                                                                PLATINIUM
                                                            </div>
                                                            <div class="offre-description">
                                                                <div class="offre-description-item">
                                                                    19 heures par mois </div>
                                                                <div class="offre-description-item">
                                                                    3 réseaux au choix </div>
                                                                <div class="offre-description-item">
                                                                    8 publication par semaine </div>
                                                                <div class="offre-description-item">
                                                                    Animation et modération </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="back">
                                                    <div class="card">
                                                        <div class="card-body platinium-background">
                                                            <div class="offre-title">
                                                                details
                                                            </div>
                                                            <div class="offre-description">
                                                                <div class="offre-description-item">
                                                                    Mise en ligne et Partage </div>
                                                                <div class="offre-description-item">
                                                                    Gestion des contacts </div>
                                                                <div class="offre-description-item">
                                                                    Création des maquette </div>
                                                                <div class="offre-description-item">
                                                                    4 sondage par année </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <h3
                                            style="text-align: initial;color: #6D8299;font-family:'Nunito', sans-serif;font-size: 1.5rem; margin-top: 3rem; margin-bottom: 1rem;">
                                            Packs Site Web</h3>

                                        <div id="solution-web" class="box-container">
                                            <div class="card-box">
                                                <div class="card-package">
                                                    <div class="front package-background-start"
                                                        style="background-image: url(&quot;http://localhost:8000/addons/img/web-start.png&quot;); background-repeat: no-repeat; background-size: 160px;">
                                                        <div class="package-container">
                                                            <div class="package-web-pack"> Web Pack </div>
                                                            <div class="package-title"> star </div>
                                                            <div class="package-description"> Site dynamique </div>
                                                        </div>
                                                    </div>
                                                    <div class="back package-background-start">
                                                        <div class="package-container-back">
                                                            <div class="package-back-title"> star </div>
                                                            <div class="package-back-description"> Pour site internet de
                                                                présentation, Notre offre pour petit budget sans sacrifier
                                                                la qualité. Tout est inclus dans ce Pack Web pour la
                                                                création d’un site internet vitrine. </div>
                                                            <div class="package-back-list">
                                                                <div class="package-back-list-item"><i></i>
                                                                    4 pages web
                                                                </div>
                                                                <div class="package-back-list-item"><i></i>
                                                                    hébergement
                                                                </div>
                                                                <div class="package-back-list-item"><i></i>
                                                                    nom de domaine au choix
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card-box">
                                                <div class="card-package">
                                                    <div class="front package-background-presence"
                                                        style="background-image: url(&quot;http://localhost:8000/addons/img/web-presence.png&quot;); background-repeat: no-repeat; background-size: 160px;">
                                                        <div class="package-container">
                                                            <div class="package-web-pack"> Web Pack </div>
                                                            <div class="package-title"> presence </div>
                                                            <div class="package-description"> Site dynamique </div>
                                                        </div>
                                                    </div>
                                                    <div class="back package-background-presence">
                                                        <div class="package-container-back">
                                                            <div class="package-back-title"> presence </div>
                                                            <div class="package-back-description"> Pour site internet
                                                                vitrine design percutant spécifique à votre image, ergonomie
                                                                soignée. Le Pack Présence est la solution par excellence
                                                            </div>
                                                            <div class="package-back-list">
                                                                <div class="package-back-list-item"><i></i>
                                                                    jusqu'a 10 pages web
                                                                </div>
                                                                <div class="package-back-list-item"><i></i>
                                                                    hébergement
                                                                </div>
                                                                <div class="package-back-list-item"><i></i>
                                                                    nom de domaine au choix
                                                                </div>
                                                                <div class="package-back-list-item"><i></i>
                                                                    Pages et functions supplémentaires
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card-box">
                                                <div class="card-package">
                                                    <div class="front package-background-essentiel"
                                                        style="background-image: url(&quot;http://localhost:8000/addons/img/web-essentiel.png&quot;); background-repeat: no-repeat; background-size: 160px;">
                                                        <div class="package-container">
                                                            <div class="package-web-pack"> Web Pack </div>
                                                            <div class="package-title"> essentiel </div>
                                                            <div class="package-description"> Site dynamique </div>
                                                        </div>
                                                    </div>
                                                    <div class="back package-background-essentiel">
                                                        <div class="package-container-back">
                                                            <div class="package-back-title"> essentiel </div>
                                                            <div class="package-back-description"> Pour site internet
                                                                administrable en complément de la création de site web. Une
                                                                interface simple et sécurisée vous permettra de mettre à
                                                                jour votre site web </div>
                                                            <div class="package-back-list">
                                                                <div class="package-back-list-item"><i></i>
                                                                    Pages web illimitées
                                                                </div>
                                                                <div class="package-back-list-item"><i></i>
                                                                    Back office et nom de domaine
                                                                </div>
                                                                <div class="package-back-list-item"><i></i>
                                                                    Pages et functions supplémentaires
                                                                </div>
                                                                <div class="package-back-list-item"><i></i>
                                                                    Réferencement naturelle, hébergement ...
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card-box">
                                                <div class="card-package">
                                                    <div id="mobile" class="front package-background-ecommerce"
                                                        style="background-image: url(&quot;http://localhost:8000/addons/img/web-ecommerce.png&quot;); background-repeat: no-repeat; background-size: 160px;">
                                                        <div class="package-container">
                                                            <div class="package-web-pack"> Web Pack </div>
                                                            <div class="package-title"> e-commerce </div>
                                                            <div class="package-description"> Site dynamique </div>
                                                        </div>
                                                    </div>
                                                    <div class="back package-background-ecommerce">
                                                        <div class="package-container-back">
                                                            <div class="package-back-title"> e-commerce </div>
                                                            <div class="package-back-description"> Votre boutique en ligne
                                                                complète et efficace, le Pack e-Commerce comprend l’ensemble
                                                                des fonctionnalités nécessaires pour le succès de la vente
                                                                en ligne. </div>
                                                            <div class="package-back-list">
                                                                <div class="package-back-list-item"><i></i>
                                                                    Pages web illimitées
                                                                </div>
                                                                <div class="package-back-list-item"><i></i>
                                                                    Module de vente et paiement en ligne
                                                                </div>
                                                                <div class="package-back-list-item"><i></i>
                                                                    Gestion des commandes et des clients ...
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>


                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade available" id="nav-visual" role="tabpanel"
                                aria-labelledby="nav-visual-tab">
                                <h4 style="color: #EB6409;margin:2.5rem 0">Solutions Publicité industrielle</h4>

                                <div class="row row-cols-1 row-cols-md-2 g-4">
                                    <div class="col-12">
                                        <div class="col-md-12">
                                            <img src="http://localhost:8000/addons/img/icons_visuel.png" class="img-fluid"
                                                alt="..." />
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="card-body px-0">
                                            <div class="industrie-content">
                                                <div class="industrie-content-title text-start"
                                                    style="color: black;font-size: 1.3rem"> Avec GMC, vous faites le
                                                    choix d’un
                                                    bon support publicitaire pour être repéré en un coup d’œil : </div>
                                                <div class=" text-start industrie-content-list">
                                                    <div class="industrie-content-list-item">
                                                        <ul
                                                            style="  list-style-type: none; padding-left: 0 ;margin-top: 1rem; color: black;font-size: 1.1rem">
                                                            <li><i class="fa-solid fa-check"
                                                                    style="color: #EB6409; font-size: 1rem ;"></i>
                                                                Enseignes
                                                                publicitaires
                                                            </li>
                                                            <li><i class="fa-solid fa-check"
                                                                    style="color: #EB6409; font-size: 1rem"></i> Panneaux
                                                                signalétiques
                                                            </li>
                                                            <li><i class="fa-solid fa-check"
                                                                    style="color: #EB6409; font-size: 1rem"></i> Habillage
                                                                et Marquage des véhicules
                                                            </li>
                                                            <li> <i class="fa-solid fa-check"
                                                                    style="color: #EB6409; font-size: 1rem"></i>Totem
                                                                publicitaire
                                                            </li>
                                                            <li><i class="fa-solid fa-check"
                                                                    style="color: #EB6409; font-size: 1rem"></i> Lettrage
                                                                en relief
                                                            </li>
                                                            <li><i class="fa-solid fa-check"
                                                                    style="color: #EB6409; font-size: 1rem"></i> Palissades
                                                                et panneaux de chantier
                                                            </li>
                                                            <li> <i class="fa-solid fa-check"
                                                                    style="color: #EB6409; font-size: 1rem"></i>Signalisations
                                                                publicitaires
                                                            </li>
                                                            <li> <i class="fa-solid fa-check"
                                                                    style="color: #EB6409; font-size: 1rem"></i>Drapeaux
                                                                publicitaires
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade available" id="nav-edit" role="tabpanel"
                                aria-labelledby="nav-edit-tab">

                                <div class="card-body text-dark">
                                    <h4 class="card-text" style="color: #49AD33; margin-bottom: 6rem">Vos références
                                        professionnelles...</h4>
                                    <div class="row row-cols-1  g-4">
                                        <a href="https://felem.ma/">
                                            <img src="http://localhost:8000/addons/img/felem2023.png" alt=""
                                                style="width: 30%; margin: auto">
                                        </a>

                                        <div class="col-12">
                                            <a href="https://felem.ma/"><img
                                                    src="http://localhost:8000/addons/img/gmc-edit-solution.jpg"
                                                    class="img-fluid"alt="..." /></a>

                                        </div>

                                    </div>
                                </div>




                            </div>
                            <div class="tab-pane fade available" id="nav-design" role="tabpanel"
                                aria-labelledby="nav-design-tab">
                                <h4 style="color: #936037; text-align: center;margin-bottom: 3rem;">Solutions Aménagement &amp;
                                    Agencement</h4>

                                <div class="row row-cols-1 row-cols-md-2 g-4">
                                    <div class="col-12">
                                        <div class="col col-md-12">
                                            <img src="http://localhost:8000/addons/img/icons_design.png" alt="GMC Design"
                                                class="img-solutions img-fluid">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="card-body px-0">
                                            <div class="industrie-content">

                                                <div class=" text-start industrie-content-list">
                                                    <div class="industrie-content-list-item">
                                                        <h5 style="color: #936037">Aménagement &amp; décoration de bureaux
                                                        </h5>
                                                        <p style="color: black">Proposition des services en décoration de
                                                            bureaux d'entreprise,
                                                            d'open space et tout autres bureaux professionnels que vous
                                                            souhaitez redynamiser ou
                                                            réaménager.</p>
                                                        <p style="color: black">Objets chinés, meubles, stores, cadres
                                                            muraux, faux plafond,
                                                            adhésifs imprimés, papiers peints, parquets…, nous disposons de
                                                            nombreuses solutions
                                                            et de matériaux pour créer, ensemble, une décoration
                                                            d'intérieure à votre image.</p>
                                                        <h4 style="color: #936037">Agencement et organisation d'événement
                                                        </h4>
                                                        <p style="color: black">Pour que l'agencement de vos stands,
                                                            corners, salons, congrès
                                                            et séminaires soit un véritable succès, donner une image
                                                            valorisante auprès de vos
                                                            collaborateurs, partenaires ou clients, GMC vous apporte des
                                                            idées, de savoir-faire
                                                            en matière d'agencement et d'organisation d'événements, en
                                                            prenant en charge le
                                                            déroulement de l'événement depuis la logistique technique
                                                            jusqu'à l'organisation
                                                            complète.</p>



                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="tab-pane fade available" id="nav-tech" role="tabpanel"
                                aria-labelledby="nav-tech-tab">
                                <h4 style="color: #24388D; text-align: center;margin-bottom: 2rem">Solutions Informatiques
                                </h4>
                                <div class="row row-cols-1 row-cols-md-2 g-4">
                                    <div class="col-12">
                                        <div class="col col-md-12">
                                            <img src="http://localhost:8000/addons/img/icons_tech.png" alt="GMC Tech"
                                                class="img-solutions img-fluid" style="max-width: 80%">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="card-body px-0">
                                            <div class="industrie-content">

                                                <div class=" text-start industrie-content-list">
                                                    <div class="industrie-content-list-item">
                                                        <ul
                                                            style="color: black;font-size: 1rem;margin-top: 1.5rem; list-style: none;">
                                                            <li><i class="fa-solid fa-check"
                                                                    style="color: #24388D; font-size: 1rem ;"></i>Audit
                                                                &amp; Consulting infrastructure et métier</li>
                                                            <li><i class="fa-solid fa-check"
                                                                    style="color: #24388D; font-size: 1rem ;"></i>Formations
                                                                certifiées : Sécurité, Réseau, Système et Storage
                                                            </li>
                                                            <li><i class="fa-solid fa-check"
                                                                    style="color: #24388D; font-size: 1rem ;"></i>Etude et
                                                                accompagnement des projets SI – métier et
                                                                infrastructure</li>
                                                            <li><i class="fa-solid fa-check"
                                                                    style="color: #24388D; font-size: 1rem ;"></i>Accompagnement
                                                                à la transformation numérique (PE, MPE et
                                                                MGE)</li>
                                                            <li><i class="fa-solid fa-check"
                                                                    style="color: #24388D; font-size: 1rem ;"></i>Mise en
                                                                place des solutions métiers – négoce, finance,
                                                                production et GTA (ERP,
                                                                FRP…)</li>
                                                            <li><i class="fa-solid fa-check"
                                                                    style="color: #24388D; font-size: 1rem ;"></i>Développement
                                                                des solutions sur mesure</li>
                                                            <li><i class="fa-solid fa-check"
                                                                    style="color: #24388D; font-size: 1rem ;"></i>Mise en
                                                                place des infrastructures informatiques physiques et
                                                                virtuelles selon
                                                                les exigences et les normes IT</li>
                                                            <li><i class="fa-solid fa-check"
                                                                    style="color: #24388D; font-size: 1rem ;"></i>Conception
                                                                et mise en place des solutions de reprise /
                                                                continuité d’activité
                                                                (Local et Cloud)</li>
                                                            <li><i class="fa-solid fa-check"
                                                                    style="color: #24388D; font-size: 1rem ;"></i>Monitoring
                                                                des infrastructures H24/7</li>
                                                            <li><i class="fa-solid fa-check"
                                                                    style="color: #24388D; font-size: 1rem ;"></i>Support
                                                                qualifié : base de données, réseau, système et
                                                                Storage</li>
                                                            <li><i class="fa-solid fa-check"
                                                                    style="color: #24388D; font-size: 1rem ;"></i>Service
                                                                infogérance adapté aux besoins des clients</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>

    {{-- vvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvv --}}
    <script>
        var web = new Vue({
            el: '#solution-web',
            data: {
                list: {
                    start: {
                        title: 'star',
                        type: 'dynamique',
                        description: 'Pour site internet de présentation, Notre offre pour petit budget sans sacrifier la qualité. Tout est inclus dans ce Pack Web pour la création d’un site internet vitrine.',
                        content: {
                            item1: '4 pages web',
                            item2: 'hébergement',
                            item3: 'nom de domaine au choix',
                        }
                    },
                    presence: {
                        title: 'presence',
                        type: 'dynamique',
                        description: 'Pour site internet vitrine design percutant spécifique à votre image, ergonomie soignée. Le Pack Présence est la solution par excellence',
                        content: {
                            item1: 'jusqu\'a 10 pages web',
                            item2: 'hébergement',
                            item3: 'nom de domaine au choix',
                            item4: 'Pages et functions supplémentaires',
                        }
                    },
                    essentiel: {
                        title: 'essentiel',
                        type: 'dynamique',
                        description: 'Pour site internet administrable en complément de la création de site web. Une interface simple et sécurisée vous permettra de mettre à jour votre site web',
                        content: {
                            item1: 'Pages web illimitées',
                            item2: 'Back office et nom de domaine',
                            item3: 'Pages et functions supplémentaires',
                            item4: 'Réferencement naturelle, hébergement ...',
                        }
                    },
                    ecommerce: {
                        title: 'e-commerce',
                        type: 'dynamique',
                        description: 'Votre boutique en ligne complète et efficace, le Pack e-Commerce comprend l’ensemble des fonctionnalités nécessaires pour le succès de la vente en ligne.',
                        content: {
                            item1: 'Pages web illimitées',
                            item2: 'Module de vente et paiement en ligne',
                            item3: 'Gestion de boutique',
                            item3: 'Gestion des commandes et des clients ...',
                        }
                    }
                }
            }
        });
    </script>
    <script>
        const element = document.getElementById("chnageTitle");
        element.innerHTML = "Solutions ";
        document.getElementById('img-bg-header').style.background =
            "url(http://localhost:8000/addons/img/referenceBg1.png) center center fixed no-repeat";
        document.getElementById('img-bg-header').style.backgroundSize = "cover";
        document.getElementById('img-bg-header').style.margin = "0px";
    </script>

    <script src="https://kit.fontawesome.com/8efc22d7af.js" crossorigin="anonymous"></script>


@endsection
