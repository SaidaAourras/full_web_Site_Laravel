@extends('master.layout')

@section('style')
<style>
 
  .col-sm-4{
    margin: 1rem;
  }
</style>
   
    
@endsection

@section('name')
    Acceuil
@endsection

@section('content') 
<div class="row justify-content-center" style="margin-top:10px;">
    <div class="col-sm-4">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">all references</h5>
          <p class="card-text"></p>
          <a href="{{route('referencee')}}" class="btn btn-success">Check it</a>
        </div>
      </div>
    </div>
    <div class="col-sm-4">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">all Categories</h5>
          <p class="card-text"></p>
          <a href="{{route('category')}}" class="btn btn-success">check it</a>
        </div>
      </div>
    </div>
    <div class="col-sm-4">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">all project</h5>
            <p class="card-text"></p>
            <a href="{{route('project')}}" class="btn btn-success">check it</a>
          </div>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">all Blogs</h5>
            <p class="card-text"></p>
            <a href="{{route('blogs')}}" class="btn btn-success">check it</a>
          </div>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">all Contact</h5>
            <p class="card-text"></p>
            <a href="{{route('contact')}}" class="btn btn-success">check it</a>
          </div>
        </div>
      </div>
  </div>
@endsection
@section('script')
    
@endsection

   
