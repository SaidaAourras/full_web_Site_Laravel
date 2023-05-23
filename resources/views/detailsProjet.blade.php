@extends('layouts.base-pages')

@section('title', 'Global Marketing Consulting Maroc')

@section('sections.container')

    <style>
        .portfolio-nav a {
            color: #1BAC92;
        }

        .portfolio-nav a {
            line-height: 50px;
            display: inline-block;
            font-size: 18px;
            text-align: center;
            width: 50px;
            height: 50px;
            -webkit-backface-visibility: hidden;
            margin-left: 10px;
        }

        #padding-topp {
            padding-top: 3rem;
        }
    </style>

    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s"
        style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
        <div class="container py-5">
            <div class="row g-5">

                <div class="col-lg-6" style="min-height: 500px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute w-100 h-100 rounded wow zoomIn" data-wow-delay="0.9s"
                            src="{{ asset('./image_project/' . $project->image) }}"
                            style="object-fit: cover; visibility: visible; animation-delay: 0.9s; animation-name: zoomIn;">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div id="padding-topp" class="section-title position-relative pb-3 mb-5">
                        <h3 class="mb-0">DESCRIPTION DU PROJET</h3>
                    </div>
                    <p class="mb-4">{{ $project->discp }}</p>
                    <div class="row g-0 mb-3">
                        <div class="" data-wow-delay="0.2s"
                            style="visibility: visible; animation-delay: 0.2s; animation-name: zoomIn;">
                            <h5 class="mb-3"><i class="fa fa-check text-primary me-3"></i>Client: {{ $project->title }}
                            </h5>
                            @foreach ($categories as $category)
                                @if ($project->category_id == $category->id)
                                    <h5 class="mb-3"><i class="fa fa-check text-primary me-3"
                                            value="{{ $category->id }}"></i>Tages: {{ $category->name }}</h5>
                                @endif
                            @endforeach
                        </div>

                    </div>

                    <a href="https://amalirrigation.com/" class="btn btn-primary py-3 px-5 mt-3 wow zoomIn"
                        data-wow-delay="0.9s"
                        style="visibility: visible; animation-delay: 0.9s; animation-name: zoomIn;">Visiter le site</a>
                </div>
            </div>
        </div>
        <div class=" text-center portfolio-nav">
            <span></span>
            <a href="/portfolio" class="transition"><i class="fa fa-th"></i></a>
        </div>
    </div>






    <script>
        const element = document.getElementById("chnageTitle");
        element.innerHTML = "Nos réalisations";
        document.getElementById('img-bg-header').style.background =
            "url(http://localhost:8000/addons/img/Métodos-para-definir-objetivos.png) center center no-repeat ";
        document.getElementById('img-bg-header').style.backgroundSize = "cover";
    </script>
@endsection




</body>

</html>
