@extends('layouts.base-pages')

@section('title', 'Global Marketing Consulting Maroc')

@section('sections.container')


    <div class="container py-5">
        <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
            {{-- <h5 class="fw-bold text-primary text-uppercase">Contact Us</h5> --}}
            <h2 style="text-transform:uppercase" class="mb-0">Découvrez nos réalisations</h2>
            <h6 class="mb-0">Stratégies digitales, campagnes de communication,
                identités de marques, applications métier…
            </h6>
        </div>

    </div>

    <!-- Portfolio section -->
    <section id="portfolio" style="padding: 0">
        <div class="container">
            <div class="text-center mb-6">
                <div class="d-inline-flex align-items-center" style="height: 45px;">

                    <small class="me-5 text-light nav-item nav-link"><a style="color:#000000" href="{{ route('portfolio') }}">All projects</a></small>


                    @foreach ($categories as $category)
                    <small class="me-5 text-light nav-item nav-link"><a style="color:#000000" href="{{ route('portfolio.index', ['category' => $category->id]) }}">{{$category->name}}</a></small>
                    @endforeach


                </div>
            </div>

        </div>

        

        <div class="container text-center">
            
            <div class="row">
                @foreach ($projects as $project)
                <div class="col-sm-3">
                    <div class="img-wrapper">
                        <div class="overlay">
                            <div class="overlay-infos">
                                <h5>{{$project->title}}</h5>
                                <a href="/detailsProjet"><i class="ti-zoom-in"></i></a>
                                <a href="/detailsProjet"><i class="ti-link"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="img-wrapper">
                        <img src="{{ asset('image_project/' . $project->image) }}"
                            alt="Download free bootstrap 4 landing page, free boootstrap 4 templates, Download free bootstrap 4.1 landing page, free boootstrap 4.1.1 templates, Creative studio Landing page">
                        <div class="overlay">
                            <div class="overlay-infos">
                                <h5>{{$project->title}}</h5>
                                <a href="/detailsProjet"><i class="ti-zoom-in"></i></a>
                                <a href="/detailsProjet"><i class="ti-link"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
               
        </div>
     
    </section>
    <!-- End of portfolio section -->


    <script>
        const element = document.getElementById("chnageTitle");
        element.innerHTML = "Portfolio ";
        document.getElementById('img-bg-header').style.background = "url(addons/img/portfolioBg.png) center center no-repeat ";
        document.getElementById('img-bg-header').style.backgroundSize = "cover";

            const categoryInputs = document.querySelectorAll('[name="category"]');
        const categoryForm = document.getElementById('categoryForm');
        categoryInputs.forEach(input => {
            input.addEventListener('click', () => {
                document.getElementById('categoryInput').value = input.getAttribute('name');
                categoryForm.submit();
        });
    });
    </script>
@endsection