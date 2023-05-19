<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<style>
 
  .col-sm-4{
    margin: 1rem;
  }
</style>
   
<title>Accueil</title>
</head>
<body>
  
  
<div class="row justify-content-center" style="margin-top:10px;">
  <div class="col-sm-4 ">
    <div class="card bg-tr overflow-hidden shadow-xl sm:rounded-lg">
      <div class="card-body">
        <h5 class="card-title">all references</h5>
        <p class="card-text"></p>
        <a href="{{route('referencee')}}" class="btn btn-success">Check it</a>
      </div>
    </div>
  </div>
  <div class="col-sm-4">
    <div class="card overflow-hidden shadow-xl sm:rounded-lg">
      <div class="card-body">
        <h5 class="card-title">all Categories</h5>
        <p class="card-text"></p>
        <a href="{{route('category')}}" class="btn btn-success">check it</a>
      </div>
    </div>
  </div>
  <div class="col-sm-4">
      <div class="card overflow-hidden shadow-xl sm:rounded-lg">
        <div class="card-body">
          <h5 class="card-title">all project</h5>
          <p class="card-text"></p>
          <a href="{{route('project')}}" class="btn btn-success">check it</a>
        </div>
      </div>
    </div>
    <div class="col-sm-4">
      <div class="card overflow-hidden shadow-xl sm:rounded-lg">
        <div class="card-body">
          <h5 class="card-title">all Blogs</h5>
          <p class="card-text"></p>
          <a href="{{route('blogs')}}" class="btn btn-success">check it</a>
        </div>
      </div>
    </div>
    <div class="col-sm-4">
      <div class="card overflow-hidden shadow-xl sm:rounded-lg">
        <div class="card-body">
          <h5 class="card-title">all Contact</h5>
          <p class="card-text"></p>
          <a href="{{route('contact')}}" class="btn btn-success">check it</a>
        </div>
      </div>
    </div>
</div>


  
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>




   
