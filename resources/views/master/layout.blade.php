<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    @yield('style')
    <style>
        body{
           background-color: rgb(235, 243, 241);
        }

    .card-text-td {
      max-width: 400px; /* ajustez la largeur maximale selon vos besoins */
      word-wrap: break-word;
      overflow-wrap: break-word;
    }

    @import url('https://fonts.googleapis.com/css2?family=Redressed&family=Merriweather:wght@300;400;700&display=swap');

.redressed{
    font-family:'Redressed' ,cursive;
}

.merriweather{
    font-family:'Merriweather',serif;
}

.cc-navbar{
    background-color: rgba(0, 0, 0, 0.598);
    font-family: 'Merriweather' , serif;
    box-shadow: 1px 1px 3px rgba(0, 0, 0, 0.54);
    z-index: 99;
    
}

.cc-navbar .nav-link{
    border-bottom: 1px solid transparent;
    transition: padding-bottom 0.4s ease-in-out , border-color 0.3s ease;

}


.cc-navbar .nav-link:hover{
    padding-bottom: 20px;
    border-bottom-color:var(--bs-teal) ;
}

.banner ,
.order-form{
    background:linear-gradient(rgba(0, 0, 0, 0.396) , rgba(0, 0, 0, 0.396)) ,url('../addons/img/1_Plan de travail 1.jpg') center center 
    fixed no-repeat;
    height: 800px;
    background-size: cover;

}

.order-form{
    height: 500px;
}

.banner-desc{
    font-size: 25px;
    font-weight: 120;
    font-family: 'Merriweather' , serif; 
    color: #e2e2e2;

}


.header-trensparent{
    background-color: rgba(240, 240, 240, 0.971);
    border-bottom-color: rgb(59, 220, 167);
}
.body-trensparent{
    background-color: rgba(22, 22, 22, 0.756);
}


input{
  box-sizing: border-box;
  background-color: rgb(121, 121, 121);
  border: none;
  border-bottom: 2px solid var(--bs-teal);
}




   </style>
    <title>@yield('name')</title>
</head>
<body>
    @include('master.navbar')
    <section class="banner d-flex justify-content-center align-items-center pt-2">
        <div class="container my-5 py-5">
           @yield('content')
        </div>
  
      </section>
      
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>