@extends('master.layout')

@section('style')
    
@endsection

@section('name')
    Modifier {{ $blog->title }}
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
                   Modifier {{ $blog->title }}
                </h3>
            </div>
            <div class="card-body">
                <form action="{{route('blog.update',$blog->id)}}" method="post">
                    @csrf
                    @method('PUT')
                    <form>
                        <div class="mb-3">
                          <label for="title" class="form-label">Title</label>
                          <input type="text" class="form-control" name="title"placeholder="title" value="{{$blog->title}}">
                        </div>
                        <div class="mb-3">
                            <label for="title_Two" class="form-label">Little title</label>
                            <input type="text" class="form-control" name="title_two" value="{{$blog->title_Two}}">
                          </div>
                          <div class="mb-3">
                            <label for="image" class="form-label">image</label>
                            <input type="file" class="form-control" name="image" value="{{$blog->image}}">
                          </div>
                          <div class="mb-3">
                            <label for="discp" class="form-label">Description</label>
                            <input type="text" class="form-control" name="discp"placeholder="discp" value="{{$blog->discp}}">
                          </div>
                        <div class="mb-3">
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


