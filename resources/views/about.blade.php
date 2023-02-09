@extends('layouts.base-pages')

@section('title', 'Global Marketing Consulting Maroc')

@section('sections.container')



    <div class="container py-5">
        <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" ">
                {{-- <h5 class="fw-bold text-primary text-uppercase">Contact Us</h5> --}}
                <h3 style="text-transform:uppercase" class="mb-0">Global Marketing Consulting,
                    La seule distance qui nous sépare, c’est un nouveau départ</h3>
               
            </div>

    </div>
        <div class=" row ">
            <div class="col-lg-6">
               <div class="about_image"><img src="/addons/img/blog-1 copy.jpg"></div>
            </div>
            <div class="col-lg-6">
              
            </div>
         </div>
</div>

        <script>
            const element = document.getElementById("chnageTitle");
            element.innerHTML = "À propos ";
            document.getElementById('img-bg-header').style.background = "url(addons/img/Image.png) center center no-repeat ";
            document.getElementById('img-bg-header').style.backgroundSize = "cover";
            /* background: linear-gradient(rgb(33 35 38 / 49%), rgb(33 35 38 / 49%)), url(../img/carousel-1.jpg) center center no-repeat; */
        </script>
@endsection
