   <!-- Vendor Start -->
   <div id="reference" class="container-fluid py-3 wow fadeInUp" data-wow-delay="0.1s">
       <div class="container py-3 mb-5">
           <div class="bg-white">
               <div class="owl-carousel vendor-carousel">
                   @foreach ($references as $reference)
                       <img src="{{ asset('./uploads/' . $reference->logo) }}" alt="">
                   @endforeach
               </div>
           </div>
       </div>
   </div>
   <!-- Vendor End -->
   <!-- Footer Start -->
   <div class="container-fluid bg-dark text-light mt-5 wow fadeInUp" data-wow-delay="0.1s">
       <div class="container">
           <div class="row gx-5">
               <div class="col-lg-4 col-md-6 footer-about">
                   <div
                       class="d-flex flex-column align-items-center justify-content-center text-center h-100 bg-primary p-4">
                       <a href="index.html" class="navbar-brand">
                           <img style="width: 10rem;" class="m-0"
                               src="http://localhost:8000/addons/img/gmclogo2.svg" alt="">
                       </a>
                       <p class="mt-3 mb-4">Global Marketing Consulting,
                           La seule distance qui nous sépare, c’est un nouveau départ</p>
                     
                   </div>
               </div>
               <div class="col-lg-8 col-md-6">
                   <div class="row gx-5">
                       <div class="col-lg-8 col-md-12 pt-5 mb-5">
                           <div class="section-title section-title-sm position-relative pb-3 mb-4">
                               <h3 class="text-light mb-0">Entrer en contact</h3>
                           </div>
                           <div class="d-flex mb-2">
                               <i class="bi bi-geo-alt text-primary me-2"></i>
                               <p class="mb-0">N°6, Immeuble N° 139, Lot. AKABAR, Av. Hassan II, Aït Melloul 80000</p>
                           </div>
                           <div class="d-flex mb-2">
                               <i class="bi bi-envelope-open text-primary me-2"></i>
                               <p class="mb-0"><a style="color:#ffffff "
                                       href="mailto:info@gmcmaroc.com">info@gmcmaroc.com</a></p>
                           </div>
                           <div class="d-flex mb-2">
                               <p class="mb-0"><a style="color:#ffffff " href="mailto:info.gmc2017@gmail.com">&nbsp;
                                       &nbsp; &nbsp;info.gmc2017@gmail.com</a></p>
                           </div>
                           <div class="d-flex mb-2">
                               <i class="bi bi-telephone text-primary me-2"></i>
                               <p class="mb-0"><a style="color:#ffffff " href="tel:+212 528 245 517 ">+212 528 245
                                       517</a></p>
                           </div>
                           <div class="d-flex mb-2">
                               <p class="mb-0"><a style="color:#ffffff " href="tel:+212 667 772 201 ">&nbsp; &nbsp;
                                       &nbsp; +212 667
                                       772 201</a></p>
                           </div>
                           {{-- <div class="d-flex mt-4">
                             <a class="btn btn-primary btn-square me-2" href="#"><i
                                     class="fab fa-twitter fw-normal"></i></a>
                             <a class="btn btn-primary btn-square me-2" href="#"><i
                                     class="fab fa-facebook-f fw-normal"></i></a>
                             <a class="btn btn-primary btn-square me-2" href="#"><i
                                     class="fab fa-linkedin-in fw-normal"></i></a>
                             <a class="btn btn-primary btn-square" href="#"><i
                                     class="fab fa-instagram fw-normal"></i></a>
                         </div> --}}
                       </div>
                       <div class="col-lg-4 col-md-12 pt-0 pt-lg-5 mb-5">
                           <div class="section-title section-title-sm position-relative pb-3 mb-4">
                               <h3 class="text-light mb-0">Pages</h3>
                           </div>
                           <div class="link-animated d-flex flex-column justify-content-start">
                               <a class="text-light mb-2" href="/"><i
                                       class="bi bi-arrow-right text-primary me-2"></i>Accueil</a>
                               <a class="text-light mb-2" href="/about"><i
                                       class="bi bi-arrow-right text-primary me-2"></i>À propos </a>
                               <a class="text-light mb-2" href="/solutions"><i
                                       class="bi bi-arrow-right text-primary me-2"></i>Solutions</a>
                               <a class="text-light mb-2" href="/contact"><i
                                       class="bi bi-arrow-right text-primary me-2"></i>Contact
</a>



                           </div>
                       </div>
                       
                   </div>
               </div>
           </div>
       </div>
   </div>
   <div class="container-fluid text-white" style="background: #061429;">
       <div class="container text-center">
           <div class="row justify-content-end">
               <div class="col-lg-8 col-md-6">
                   <div class="d-flex align-items-center justify-content-center" style="height: 75px;">
                       <p class="mb-0"> Copyright &copy; <a class="text-white " href="#"> Global Marketing
                               Consulting</a> 2023 - Tous droits réservés.
                       </p>
                   </div>
               </div>
           </div>
       </div>
   </div>
   <!-- Footer End -->


   <!-- Back to Top -->
   <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded back-to-top"><i class="bi bi-arrow-up"></i></a> 
