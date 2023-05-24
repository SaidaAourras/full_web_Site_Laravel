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
                    </div>
                    <div class="card-header bg-transparent  merriweather fs-4">
                        <nav>
                            <div class="nav nav-tabs justify-content-center " id="nav-tab" role="tablist">
                              <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true"><img src="http://localhost:8000/addons/img/gmc_print.png" alt="" style="width:100px"></button>
                              <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false"><img src="http://localhost:8000/addons/img/gmc_print.png" alt="" style="width:100px"></button>
                              <button class="nav-link" id="nav-contact-tab" data-bs-toggle="tab" data-bs-target="#nav-contact" type="button" role="tab" aria-controls="nav-contact" aria-selected="false"><img src="http://localhost:8000/addons/img/gmc_print.png" alt=""style="width:100px"></button>
                              <button class="nav-link" id="nav-contact-tab" data-bs-toggle="tab" data-bs-target="#nav-edit" type="button" role="tab" aria-controls="nav-contact" aria-selected="false"><img src="http://localhost:8000/addons/img/gmc_edit.png" alt="" style="width:100px"></button>
                              <button class="nav-link" id="nav-contact-tab" data-bs-toggle="tab" data-bs-target="#nav-design" type="button" role="tab" aria-controls="nav-contact" aria-selected="false"><img src="http://localhost:8000/addons/img/gmc_design.png" alt="" style="width:100px"></button>
                              <button class="nav-link" id="nav-contact-tab" data-bs-toggle="tab" data-bs-target="#nav-tech" type="button" role="tab" aria-controls="nav-contact" aria-selected="false"><img src="http://localhost:8000/addons/img/gmc_tech.png" alt="" style="width:100px"></button>
                            </div>
                          </nav>
                          <div class="tab-content" id="nav-tabContent">
                            <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                                <div class="row row-cols-1 row-cols-md-2 g-4">
                                    <div class="col d-sm-none d-md-block">
                                        <div class="card">
                                            <img src="assets/img/Carousel/carousel3.jpg" class="card-img-top" alt="..." />
                                            <div class="card-body">
                                                <h5 class="card-title">hello</h5>
                                                <p class="card-text">
                                                    This is a longer card with supporting text below as a natural lead-in to additional content.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col d-sm-none d-md-block">
                                        <div class="card">
                                            <img src="assets/img/Carousel/carousel4.jpg" class="card-img-top" alt="..." />
                                            <div class="card-body">
                                                <h5 class="card-title">hello</h5>
                                                <p class="card-text">
                                                    This is a longer card with supporting text below as a natural lead-in to additional content. This
                                                    content is a little bit longer.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab"> <div class="row row-cols-1 row-cols-md-2 g-4">
                                <div class="col d-sm-none d-md-block">
                                    <div class="card">
                                        <img src="assets/img/Carousel/carousel3.jpg" class="card-img-top" alt="..." />
                                        <div class="card-body">
                                            <h5 class="card-title">hello</h5>
                                            <p class="card-text">
                                                This is a longer card with supporting text below as a natural lead-in to additional content.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col d-sm-none d-md-block">
                                    <div class="card">
                                        <img src="assets/img/Carousel/carousel4.jpg" class="card-img-top" alt="..." />
                                        <div class="card-body">
                                            <h5 class="card-title">hello</h5>
                                            <p class="card-text">
                                                This is a longer card with supporting text below as a natural lead-in to additional content. This
                                                content is a little bit longer.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                            <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-tech"> <div class="row row-cols-1 row-cols-md-2 g-4">
                                <div class="col d-sm-none d-md-block">
                                    <div class="card">
                                        <img src="assets/img/Carousel/carousel3.jpg" class="card-img-top" alt="..." />
                                        <div class="card-body">
                                            <h5 class="card-title">fffffffffffffffffff</h5>
                                            <p class="card-text">
                                                This is a longer card with supporting text below as a natural lead-in to additional content.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col d-sm-none d-md-block">
                                    <div class="card">
                                        <img src="assets/img/Carousel/carousel4.jpg" class="card-img-top" alt="..." />
                                        <div class="card-body">
                                            <h5 class="card-title">hello</h5>
                                            <p class="card-text">
                                                This is a longer card with supporting text below as a natural lead-in to additional content. This
                                                content is a little bit longer.
                                            </p>
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
