
          <nav class="navbar navbar-expand-lg navbar-dark px-5 py-3 py-lg-0">
            <div class="container">
                <a href="/index" class="navbar-brand p-0">
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
            </nav>