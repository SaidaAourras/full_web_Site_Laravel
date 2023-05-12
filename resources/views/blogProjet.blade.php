@extends('layouts.base-pages')

@section('title', 'Global Marketing Consulting Maroc')

@section('sections.container')
<style>
    .img-fluid{
        height: 500px;
    }
</style>

    <div class="container py-5">
        <div class="row g-5">
            <div class="col-lg-12">
                <!-- Blog Detail Start -->
                <div class="mb-5">
                    <img class="img-fluid w-100 rounded mb-5" src="{{asset('./image_blog/'.$blog->image)}}" alt="">
                    <h1 class="mb-4">{{$blog->title}}</h1>
                    <p>{{$blog->discp}}</p>
                </div>
                <!-- Blog Detail End -->

                
            </div>

        </div>
    </div>
    <script>
        const element = document.getElementById("chnageTitle");
        element.innerHTML = "Détail du blog ";
        document.getElementById('img-bg-header').style.background =
            "url(addons/img/influence.png) center center no-repeat ";
        document.getElementById('img-bg-header').style.backgroundSize = "cover";
    </script>
@endsection
