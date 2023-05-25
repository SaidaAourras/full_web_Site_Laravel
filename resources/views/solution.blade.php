@extends('layouts.base-pages')

@section('title', 'Global Marketing Consulting Maroc')

@section('sections.container')

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Redressed&family=Merriweather:wght@300;400;700&display=swap');

.redressed {
	font-family: 'Redressed', cursive;
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

        /* .carousel {
            position: relative;
            width: 65vw;
            height: 300px;
            border: 5px solid #000;
            overflow: hidden;
        }

        .carousel>button {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            border: none;
            background-color: transparent;
            font-size: 1.5rem;
            cursor: pointer;
            padding: 0.5rem;
        }

        .carousel__btn--right {
            right: 0;
        }

        .carousel__slider {
            position: absolute;
            left: 0;
            display: flex;
            width: 100%;
            height: 100%;
            z-index: -5;
            transition: transform 650ms ease-in-out;
        }

        .carousel__slide {
            display: grid;
            place-items: center;
            min-width: 100%;
            font: 900 1rem helvetica, sans-serif;
            border: .5px solid rgba(0, 0, 0, .5);
        } */

        .cc-menu {
            background:transparent;

       }
    </style>

    {{-- vvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvv --}}

    <section class="cc-menu merriweather py-5">
        <div class="container">
            <div class="row">
                <h3 class="text-center text-dark merriweather">Nos Services</h3>
                <div class="card bg-transparent text-center mb-4">
                    <div class="card-body text-dark">
                        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                    </div>
                    <div class="card-header bg-transparent  merriweather fs-4">
                        <nav>
                            <div class="nav nav-tabs justify-content-center " id="nav-tab" role="tablist">
                              <button class="nav-link active bg-nav-link" id="nav-print-tab" data-bs-toggle="tab" data-bs-target="#nav-print" type="button" role="tab" aria-controls="nav-print" aria-selected="true"><img src="http://localhost:8000/addons/img/gmc_print.png" alt="" style="width:100px"></button>
                              <button class="nav-link" id="nav-digital-tab" data-bs-toggle="tab" data-bs-target="#nav-digital" type="button" role="tab" aria-controls="nav-digital" aria-selected="false"><img src="http://localhost:8000/addons/img/gmc_visuel.png" alt="" style="width:100px"></button>
                              <button class="nav-link" id="nav-visaul-tab" data-bs-toggle="tab" data-bs-target="#nav-visual" type="button" role="tab" aria-controls="nav-visual" aria-selected="false"><img src="http://localhost:8000/addons/img/gmc_digital.png" alt=""style="width:100px"></button>
                              {{-- <button class="nav-link" id="nav-contact-tab" data-bs-toggle="tab" data-bs-target="#nav-contact" type="button" role="tab" aria-controls="nav-contact" aria-selected="false"><img src="http://localhost:8000/addons/img/gmc_print.png" alt="" style="width:100px"></button>
                              <button class="nav-link" id="nav-contact-tab" data-bs-toggle="tab" data-bs-target="#nav-contact" type="button" role="tab" aria-controls="nav-contact" aria-selected="false"><img src="http://localhost:8000/addons/img/gmc_print.png" alt="" style="width:100px"></button>
                              <button class="nav-link" id="nav-contact-tab" data-bs-toggle="tab" data-bs-target="#nav-contact" type="button" role="tab" aria-controls="nav-contact" aria-selected="false"><img src="http://localhost:8000/addons/img/gmc_print.png" alt="" style="width:100px"></button> --}}
                            </div>
                          </nav>
                          <div class="tab-content" id="nav-tabContent">
                            <div class="tab-pane fade show active" id="nav-print" role="tabpanel" aria-labelledby="nav-print-tab">
                                <div class="row row-cols-1 row-cols-md-3 g-4">
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
                                          <ul >
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
                                          <ul >
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
                                  </div>
                            </div>
                            <div class="tab-pane fade" id="nav-digital" role="tabpanel" aria-labelledby="nav-digital-tab"> <div class="row row-cols-1 row-cols-md-2 g-4">
                               
                            </div>
                        </div>
                            <div class="tab-pane fade available" id="nav-visual" role="tabpanel" aria-labelledby="nav-visual-tab"> <div class="row row-cols-1 row-cols-md-2 g-4">
                                            <div class="col-12">
                                                <div class="col-md-12">
                                                    <img src="http://localhost:8000/addons/img/detailsProjet.jpg" class="img-fluid" alt="..." />
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="card-body px-0">
                                                    <h3 class="card-title">Card title</h3>
                                                    <p class="card-text">
                                                       
                                                            <li >enseignes pulicitaires</li>
                                                            <li > Panneaus signalétiques </li>
                                                            <li > Habillage alucobonde</li>
                                                            <li >Marquage véhicules</li>
                                                            <li >Totem publicitaire</li>
                                                            <li >Lettrage en relief</li>
                                                            <li >Palissades et panneaux de chantier</li>
                                                            <li >Signalisations publicitaires</li>
                                                            <li >Drapeaux publicitaire</li>
                                                          
                                                    </p>
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
