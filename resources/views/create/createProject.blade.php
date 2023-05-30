@extends('master.layout')

@section('style')
    
@endsection

@section('name')
    create new Projrect
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
                    Create new Project
                </h3>
            </div>
            <div class="card-body  body-trensparent">
                <form action="{{route('project.store')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <form>
                        <div class="mb-2">
                          <label for="title" class="form-label banner-desc">Title</label>
                          <input type="text" class="form-control border-shortand" name="title" placeholder="title">
                        </div>
                        <div class="mb-2">
                            <label for="image" class="form-label banner-desc">image</label>
                            <input type="file" class="form-control border-shortand" name="image">
                          </div>
                        <div class="mb-2">
                            <label for="link">Link</label>
                            <input type="url" id="link" name="link" placeholder="https://example.com"  class="form-control border-shortand" aria-label="With textarea"  required>
                        </div>
                        <div class="mb-2">
                            <label for="description">Description</label>
                            <textarea type="text" id="description" name="discp" placeholder="Enter a description"  class="form-control border-shortand" aria-label="With textarea" ></textarea>
                        </div>
                        <div class="mb-2">
                            <label for="category_id" class="form-label ">Category</label>
                            <select class="form-select border-shortand" name="category_id" aria-label="Default select example">
                                <option placeholder="chose category" selected></option>
                                @foreach($categories as $category)
                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                @endforeach
                            </select>
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

