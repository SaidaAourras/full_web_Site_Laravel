@extends('master.layout')

@section('style')
   
    
@endsection

@section('name')
    Projects
@endsection
 @section('content')
 <div class="row  justify-content-center">
    @foreach ($projects as $project)
    <div class="col-sm-6 col-md-3 ">
        <div class="thumbnail">
            <a href="#"><img style='height: 250px; width: 250px; object-fit: contain' src="{{ asset('image_project/' . $project->image) }}" ></a>
            <div class="caption">
                <h3>{{ $project->title }}</h3>
                <p>{{ $project->discp }}</p>
                <p>
                    <form action="{{ route('project.delete',$project->id) }}" method="post">
                       @csrf
                       @method('DELETE')
                        <a class="btn btn-outline-success" href="{{ route('project.edit',$project->id) }}">Edit</a>
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
