@extends('master.layout')

@section('style')
   
    
@endsection

@section('name')
    Blogs
@endsection
 @section('content')
  @if (session()->has('success'))
                 <div class="alert alert-success">
                  {{ session()->get('success') }}
                 </div>
             @endif
 <div class="row  justify-content-center bg-color py-4">
    @foreach ($blogs as $blog)
    <div class="col-sm-6 col-md-3 ">
        <div class="thumbnail">
            <a href="#"><img style='height: 250px; width: 250px; object-fit: contain' src="{{ asset('image_blog/' . $blog->image) }}" ></a>
            <div class="caption">
                <h3>{{ $blog->title }}</h3>
                <p class="banner-desc">{{ $blog->discp }}</p>
                <p>
                    <form action="{{ route('blog.delete',$blog->id) }}" method="post">
                       @csrf
                       @method('DELETE')
                        <a class="btn btn-outline-success" href="{{ route('blog.edit',$blog->id) }}">Edit</a>
                        <button class="btn btn-outline-danger" type="submit">
                        Delete
                    </button>
                   </form>
                </p>
            </div>
        </div>
    </div>
        @endforeach
    </div>
@endsection


@section('script')
@endsection
