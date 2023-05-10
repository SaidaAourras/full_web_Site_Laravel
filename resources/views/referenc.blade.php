@extends('layouts.base-pages')

@section('title', 'Global Marketing Consulting Maroc')

@section('sections.container')

    <style>
        #reference {
            display: none;
        }

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

    <div class="container py-5">
        {{-- <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">

        <h2 class="mb-0">RÉALISONS ENSEMBLE VOTRE PROJET</h2>
        <h6 class="mb-0">Entrez vos coordonnées et nous vous recontacterons dans les plus brefs délais !</h6>
    </div> --}}
        <div class="row ">
            <div class="container ">
                <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">

                    <h2 style="text-transform:uppercase" class="mb-0">Nos references</h2>
                    <h6 class="mb-0">Nous sommes sur le marché depuis 2007
                        Grâce à plus de 210 clients servis avec amour et passion
                    </h6>
                </div>

            </div>

            

            <div class="row g-3 mb-5">
                <div class="col-lg-2 col-md-6 wow zoomIn" data-wow-delay="0.3s"
                    style="visibility: visible; animation-delay: 0.3s; animation-name: zoomIn;">
                    <div class="flip-box">
                        <div class="flip-box-inner">
                            <div class="flip-box-front">
                                <img class="image" src="">
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        

        </div>



    </div>
    <!-- Contact End -->



    <script>
        const element = document.getElementById("chnageTitle");
        element.innerHTML = "Reference ";
        document.getElementById('img-bg-header').style.background =
            "url(addons/img/referenceBg1.png) center center no-repeat ";
        document.getElementById('img-bg-header').style.backgroundSize = "cover";
    </script>
@endsection
