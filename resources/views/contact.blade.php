@extends('layouts.base-pages')

@section('title', 'Global Marketing Consulting Maroc')

@section('sections.container')


    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
                {{-- <h5 class="fw-bold text-primary text-uppercase">Contact Us</h5> --}}
                <h2 class="mb-0">RÉALISONS ENSEMBLE VOTRE PROJET</h2>
                <h6 class="mb-0">Entrez vos coordonnées et nous vous recontacterons dans les plus brefs délais !</h6>
            </div>
            <div class="row g-5 mb-5">
                <div class="col-lg-4">
                    <div class="d-flex align-items-center wow fadeIn" data-wow-delay="0.1s">
                        <div class="bg-primary d-flex align-items-center justify-content-center rounded"
                            style="width: 60px; height: 60px;">
                            <i class="fa fa-phone-alt text-white"></i>
                        </div>
                        <div class="ps-4">
                            <h5 class="mb-2">Appelez pour poser n'importe quelle question</h5>
                            <h5 class="text-primary mb-0"><a style="color:#1BAC92 " href="tel:+212 667 772 201 ">+212 667
                                    772 201</a></h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="d-flex align-items-center wow fadeIn" data-wow-delay="0.4s">
                        <div class="bg-primary d-flex align-items-center justify-content-center rounded"
                            style="width: 60px; height: 60px;">
                            <i class="fa fa-envelope-open text-white"></i>
                        </div>
                        <div class="ps-4">
                            <h5 class="mb-2">E-mail pour obtenir un devis gratuit</h5>
                            <h5 class="text-primary mb-0"><a style="color:#1BAC92 "
                                    href="mailto:info@gmcmaroc.com">info@gmcmaroc.com</a></h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="d-flex align-items-center wow fadeIn" data-wow-delay="0.8s">
                        <div class="bg-primary d-flex align-items-center justify-content-center rounded"
                            style="width: 60px; height: 60px;">
                            <i class="fa fa-map-marker-alt text-white"></i>
                        </div>
                        <div class="ps-4">
                            <h5 class="mb-2">Visitez notre bureau</h5>
                            <h5 class="text-primary mb-0">N°6, Immeuble N° 139, Lot. AKABAR, Av. Hassan II, Aït Melloul
                                80000</h5>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row g-5">
                <div class="col-lg-6 wow slideInUp" data-wow-delay="0.3s">
                    <form action="{{route('contact.msg')}}" method="post">
                    
                        @csrf
                        <form>
                        <div class="row g-3">
                            <div class="col-md-6">
                                <input type="text" name="name" class="form-control border-0 bg-light px-4"
                                    placeholder=" Nom et Prénom *" style="height: 55px;">
                            </div>
                            <div class="col-md-6">
                                <input type="email" name="email" class="form-control border-0 bg-light px-4"
                                    placeholder="Adresse Email *" style="height: 55px;">
                            </div>
                            <div class="col-12">

                                <input class="form-control border-0 bg-light px-4" placeholder="+212 6 00000000"
                                    style="height: 55px;" type="tel" id="phone" name="num"
                                    pattern="0[5-9][0-9]{8}" required>
                            </div>
                            <div class="col-12">
                                <input type="text" class="form-control border-0 bg-light px-4" placeholder="Object"
                                    style="height: 55px;">
                            </div>
                            <div class="col-12">
                                <textarea class="form-control border-0 bg-light px-4 py-3" rows="4" placeholder="Message"></textarea>
                            </div>
                            <div class="col-12">
                                <button class="btn btn-primary w-100 py-3" type="submit">Envoyer</button>
                            </div>
                        </div>
                    </form>
                    </form>
                </div>
                <div class="col-lg-6 wow slideInUp" data-wow-delay="0.6s">
                    {{-- <iframe class="position-relative rounded w-100 h-100"
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3001156.4288297426!2d-78.01371936852176!3d42.72876761954724!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4ccc4bf0f123a5a9%3A0xddcfc6c1de189567!2sNew%20York%2C%20USA!5e0!3m2!1sen!2sbd!4v1603794290143!5m2!1sen!2sbd"
                        frameborder="0" style="min-height: 350px; border:0;" allowfullscreen="" aria-hidden="false"
                        tabindex="0"></iframe> --}}
                    <iframe class="position-relative rounded w-100 h-100"
                        src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d13776.459289529057!2d-9.5034731!3d30.319251654367005!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xdb3c777ab53dfeb%3A0xd5a474b5c049d369!2sGlobal%20Marketing%20Consulting!5e0!3m2!1sfr!2sma!4v1675691617994!5m2!1sfr!2sma"
                        style="min-height: 350px; border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->


  
    <script>
        const element = document.getElementById("chnageTitle");
        element.innerHTML = "Contactez-nous ";
        document.getElementById('img-bg-header').style.background = "url(addons/img/bg-contact.jpg) center center no-repeat ";
        document.getElementById('img-bg-header').style.backgroundSize = "cover";
        
    </script>
@endsection
