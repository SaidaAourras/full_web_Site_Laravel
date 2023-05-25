@extends('layouts.base-pages')

@section('title', 'Global Marketing Consulting Maroc')

@section('sections.container')

    <style>
        /* @import url('https://fonts.googleapis.com/css2?family=Redressed&family=Merriweather:wght@300;400;700&display=swap'); */

        .redressed {
            font-family: 'Nunito', sans-serif;

        }

        .merriweather {
            font-family: 'Merriweather', serif;
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
            /* overflow: hidden; */
        }

        .card {
            border: none;
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

        @media only screen and (max-width: 600px) {
            .solution-web {
                grid-template-columns: 1fr;
            }

            .r-tabs .r-tabs-nav {
                display: none !important;
            }
        }
    </style>

    {{-- vvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvv --}}

    <section class="cc-menu merriweather py-5">
        <div class="container">
            <div class="row">
                <div class="card bg-transparent text-center mb-4">
                    <div class="card-body text-dark">
                        <p class="card-text">With supporting text below as a natural lead-in to additional content With
                            supporting text below as a natural lead-in to additional content With supporting text below as a
                            natural lead-in to additional content.</p>
                    </div>
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
                                {{-- <div class="row row-cols-1 row-cols-md-3 g-4">
                                    <div class="col">
                                        <div class="card h-100">
                                            <div class="card-body">
                                                <h5 class="card-title">IDENTITE VISUELLE</h5>
                                                <ul>
                                                    <li class="list-group-item">LOGOTYPE</li>
                                                    <li class="list-group-item"> iDENTITE VISUELLE</li>
                                                    <li class="list-group-item">CHARTE GRPHIQUE</li>
                                                    <li class="list-group-item">CONCEPTION ET CREATION </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="card h-100">
                                            <div class="card-body py-5">
                                                <h5 class="card-title">OBJETS & TEXTILES</h5>
                                                <ul>
                                                    <li class="list-group-item">SIGNALISATION PAR OBJET</li>
                                                    <li class="list-group-item"> TEXTILES PUBLICITAIRE</li>
                                                    <li class="list-group-item">SUBLIMATION</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="card h-100">
                                            <div class="card-body">
                                                <h5 class="card-title">IMRESSION OFFSET & NUMERIQUE</h5>
                                                <ul>
                                                    <li class="list-group-item">BROCHURES</li>
                                                    <li class="list-group-item"> DEPLIANTS </li>
                                                    <li class="list-group-item"> PAPTIER ENTETE</li>
                                                    <li class="list-group-item">AFFICHES</li>
                                                    <li class="list-group-item">PROSPECTUS</li>
                                                    <li class="list-group-item">AUTOCOLLANTS</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div> --}}

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
                                                tabindex="0"><i
                                                    style="color: rgb(0, 159, 227); cursor: pointer;"></i></div>
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
                                                tabindex="0"><i
                                                    style="color: rgb(0, 159, 227); cursor: pointer;"></i></div>
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
                                                tabindex="0"><i
                                                    style="color: rgb(0, 159, 227); cursor: pointer;"></i></div>
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
                                                tabindex="0"><i
                                                    style="color: rgb(0, 159, 227); cursor: pointer;"></i></div>
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
                                                tabindex="0"><i
                                                    style="color: rgb(0, 159, 227); cursor: pointer;"></i></div>
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
                                                tabindex="0"><i
                                                    style="color: rgb(0, 159, 227); cursor: pointer;"></i></div>
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
                                                tabindex="0"><i
                                                    style="color: rgb(0, 159, 227); cursor: pointer;"></i></div>
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
                                <div class="row row-cols-1 row-cols-md-2 g-4">
                                    <h1>tttttttttttttttttttt</h1>
                                </div>
                            </div>
                            <div class="tab-pane fade available" id="nav-visual" role="tabpanel"
                                aria-labelledby="nav-visual-tab">
                                <div class="row row-cols-1 row-cols-md-2 g-4">
                                    <div class="col-12">
                                        <div class="col-md-12">
                                            <img src="http://localhost:8000/addons/img/detailsProjet.jpg"
                                                class="img-fluid" alt="..." />
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="card-body px-0">
                                            <h3 class="card-title">Card title</h3>
                                            <p class="card-text">


                                                <li>visualvisualvisual et panneaux de chantier</li>
                                                <li>Signalisations publicitaires</li>
                                                <li>Drapeaux publicitaire</li>

                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade available" id="nav-edit" role="tabpanel"
                                aria-labelledby="nav-edit-tab">
                                <div class="row row-cols-1 row-cols-md-2 g-4">
                                    <div class="col-12">
                                        <div class="col-md-12">
                                            <img src="http://localhost:8000/addons/img/detailsProjet.jpg"
                                                class="img-fluid" alt="..." />
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="card-body px-0">
                                            <h3 class="card-title">Card title</h3>
                                            <p class="card-text">

                                                <li>enseignes pulicitaires</li>


                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade available" id="nav-design" role="tabpanel"
                                aria-labelledby="nav-design-tab">
                                <div class="row row-cols-1 row-cols-md-2 g-4">
                                    <div class="col-12">
                                        <div class="col-md-12">
                                            <img src="http://localhost:8000/addons/img/detailsProjet.jpg"
                                                class="img-fluid" alt="..." />
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="card-body px-0">
                                            <h3 class="card-title">Card title</h3>
                                            <p class="card-text">

                                                <li>enseignes pulicitaires</li>

                                                <li>Drapeaux publicitaire</li>

                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade available" id="nav-tech" role="tabpanel"
                                aria-labelledby="nav-tech-tab">
                                <div class="row row-cols-1 row-cols-md-2 g-4">
                                    <div class="col-12">
                                        <div class="col-md-12">
                                            <img src="http://localhost:8000/addons/img/detailsProjet.jpg"
                                                class="img-fluid" alt="..." />
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="card-body px-0">
                                            <h3 class="card-title">Card title</h3>
                                            <p class="card-text">

                                                <li>enseignes ttttttttttttt</li>
                                                <li> Panneaus signalétiques </li>
                                                <li> Habillage alucobonde</li>
                                                <li>Marquage véhicules</li>
                                                <li>Totem publicitaire</li>
                                                <li>Lettrage en relief</li>
                                                <li>Palissades et panneaux de chantier</li>
                                                <li>Signalisations publicitaires</li>
                                                <li>Drapeaux publicitaire</li>

                                            </p>
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
        const element = document.getElementById("chnageTitle");
        element.innerHTML = "Solution ";
        document.getElementById('img-bg-header').style.background =
            "url(http://localhost:8000/addons/img/referenceBg1.png) center center fixed no-repeat";
        document.getElementById('img-bg-header').style.backgroundSize = "cover";
        document.getElementById('img-bg-header').style.margin = "0px";
    </script>



@endsection
