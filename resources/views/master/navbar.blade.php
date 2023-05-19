
          {{-- <nav class="navbar navbar-expand-lg navbar-dark px-5 py-3 py-lg-0">
            <div class="container">
                <a href="#" class="navbar-brand p-0">
                    <img style="width: 10rem;" class="m-0" src="addons/img/logo-GMC.svg" alt="">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="fa fa-bars"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav ms-auto py-0">
                        <a class="nav-link active" aria-current="page" href="{{ route('home') }}" style="color:black;">Acceuil</a>
                        <a class="nav-link" href="{{ route('reference.create') }}" style="color:black;">Add Reference</a>
                        <a class="nav-link" href="{{ route('category.create') }}" style="color:black;">Add Category</a>
                        <a class="nav-link" href="{{ route('project.create') }}" style="color:black;">Add Projects</a>
                        <a class="nav-link" href="{{ route('blog.create') }}" style="color:black;">Add Blogs</a>
                    </div>
                </div>
                </div>
            </nav> --}}

            <nav class="cc-navbar navbar navbar-expand-lg position-fixed navbar-dark w-100">
                <div class="container-fluid">
                  <a class="navbar-brand text-uppercase fw-bolder mx-3 py-3" href="/index"> 
                    <img style="width: 10rem;" class="m-0" src="addons/img/logo-GMC.svg" alt="">
                </a>
                  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" 
                          aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                      <li class="nav-item pe-4">
                        <a class="nav-link active" aria-current="page"  href="{{ route('home') }}">Accueil</a>
                      </li>
                      <li class="nav-item pe-4">
                        <a class="nav-link" href="{{ route('reference.create') }}">Add Reference</a>
                      </li>
                  
                      <li class="nav-item pe-4">
                        <a class="nav-link" href="{{ route('category.create') }}">Add Category</a>
                      </li>
                      <li class="nav-item pe-4">
                        <a class="nav-link" href="{{ route('project.create') }}" >Add Projects</a>
                      </li>
                      <li class="nav-item pe-4">
                        <a class="nav-link" href="{{ route('blog.create') }}" >Add Blogs</a>
                      </li>
                      <li class="nav-item pe-4">
                        <a class="nav-link" href="/contacts" >Contacts</a>
                      </li>
                   
                    </ul>
                    
                  </div>
                </div>
              </nav>