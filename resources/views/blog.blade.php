@extends('layouts.base-pages')

@section('title', 'Global Marketing Consulting Maroc')

@section('sections.container')


    <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
        <h2 class="fw-bold text-uppercase"> DÉCOUVREZ NOTRE BLOG DU MARKETING DIGITAL
        </h2>
        <h6 class="mb-0">Retrouvez les dernières actualités dans le secteur du marketing digital accompagnées de nos
            conseils d’experts du domaine.</h6>
    </div>

    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s"
        style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
        <div class="container py-5">
            <div class="row g-5">
                <!-- Blog list Start -->
                <div class="col-lg-12">
                    <div class="row g-5">
                        @foreach ($blogs as $blog)
                        <div class="col-md-4 wow slideInUp" data-wow-delay="0.1s"
                            style="visibility: visible; animation-delay: 0.1s; animation-name: slideInUp;">
                            <div class="blog-item bg-light rounded overflow-hidden">
                                <div class="blog-img position-relative overflow-hidden">
                                    <img class="img-fluid" src="{{ asset('./image_blog/'.$blog->image)}}" alt="">
                                </div>
                                <div class="p-4">
                                    <div class="d-flex mb-3">
                                        
                                        <small><i class="far fa-calendar-alt text-primary me-2"></i>{{$blog->created_at}}</small>
                                    </div>
                                    <h4 class="mb-3">{{$blog->title_two}}</h4>
                                    <p>{{$blog->title}}</p>
                                    <a class="text-uppercase" href="{{route('blogProjet', $blog->title)}}">Read More <i
                                            class="bi bi-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                        @endforeach
                       {{ $blogs->links('pagination::bootstrap-4') }}
                    </div>
                </div>
                <!-- Blog list End -->


            </div>
        </div>
    </div>

    <script>
        const element = document.getElementById("chnageTitle");
        element.innerHTML = "Blog ";
        document.getElementById('img-bg-header').style.background =
            "url(addons/img/stock-photo-libraries-1200x900.png) center center no-repeat ";
        document.getElementById('img-bg-header').style.backgroundSize = "cover";
    </script>
@endsection
