@extends('master.layout')

@section('style')
    
@endsection

@section('name')
    create new blog
@endsection

@section('content')
    <div class="row my-4">
      <div class="col-md-8 mx-auto">
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
        <div class="card  header-color border-shortand">
            <div class="card-header text-white header-color">
                <h3 class="card-title">
                    add
                </h3>
            </div>
            <div class="card-body body-trensparent">
                <form action="{{route('blog.store')}}" method="post" enctype="multipart/form-data">
                  @csrf
                  <form>
                     
                      <div class="mb-2">
                        <label for="title" class="form-label banner-desc " >Title</label>
                        <input type="text" class="form-control  border-shortand" name="title" placeholder="title">
                      </div>
                      <div class="mb-2">
                        <label for="title" class="form-label banner-desc" >Title</label>
                        <input type="text" class="form-control  border-shortand" name="title_two" placeholder="title">
                      </div>
                      <div class="mb-2">
                          <label for="image" class="form-label banner-desc"  >image</label>
                          <input type="file" class="form-control  border-shortand" name="image">
                        </div>
                      <div class="mb-2">
                          <label for="description" class=" banner-desc" >Description</label>
                          <textarea type="text" id="description" name="discp" placeholder="Enter a description"  class="form-control  border-shortand" aria-label="With textarea" ></textarea>
                      </div>
                      <div class="mb-2">
                          <button class="btn btn-outline-success">
                              Valider
                          </button>
                      </div>
                    </form>
              </form>
            </div>
        </div>
      </div>
    </div>
@endsection
@section('script')
    
@endsection

