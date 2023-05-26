@extends('layouts.base-pages')

@section('title', 'Global Marketing Consulting Maroc')



@section('sections.container')
<script src="https://kit.fontawesome.com/8efc22d7af.js" crossorigin="anonymous"></script>

<div class="container-fluid  py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container py-5">
        <section id="thanks-section" class=""> 
            <div class="thanks d-flex flex-column align-items-center">
                <div class="text-center mb-4">
                    <h2>Thank you for your message</h2>
                </div>
                <div class="text-center">
                    <a href="/home">
                        <button class="btn btn-success btn-lg">Return <i class="fa-solid fa-house"></i></button>
                    </a>
                </div>
            </div>
        </section>
    </div>
</div>


<script>
    const element = document.getElementById("chnageTitle");
    element.innerHTML = "Thanks for contact us";
    document.getElementById('img-bg-header').style.background =
        "url(http://localhost:8000/addons/img/referenceBg1.png) center center no-repeat ";
    document.getElementById('img-bg-header').style.backgroundSize = "cover";
</script>
@endsection