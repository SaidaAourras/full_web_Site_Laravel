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
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">
                    add
                </h3>
            </div>
            <div class="card-body">
                <form action="{{route('blog.store')}}" method="post" enctype="multipart/form-data">
                  @csrf
                  <form>
                     
                      <div class="mb-2">
                        <label for="title" class="form-label">Title</label>
                        <input type="text" class="form-control" name="title" placeholder="title">
                      </div>
                      <div class="mb-2">
                        <label for="title" class="form-label">Title</label>
                        <input type="text" class="form-control" name="title_two" placeholder="title">
                      </div>
                      <div class="mb-2">
                          <label for="image" class="form-label">image</label>
                          <input type="file" class="form-control" name="image">
                        </div>
                      <div class="mb-2">
                          <label for="description">Description</label>
                          <textarea type="text" id="description" name="discp" placeholder="Enter a description"  class="form-control" aria-label="With textarea" ></textarea>
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

