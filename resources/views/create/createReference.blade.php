@extends('master.layout')

@section('style')
    
@endsection

@section('name')
    create new rerefence
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
        <div class="card header-color border-shortand">
            <div class="card-header text-white header-color">
                <h3 class="card-title">
                    Create new Reference
                </h3>
            </div>
            <div class="card-body body-trensparent">
                <form action="{{route('reference.store')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <form>
                        <div class="mb-3">
                          <label for="name" class="form-label  banner-desc">Name</label>
                          <input type="text" class="form-control  border-shortand" name="name"placeholder="name">
                        </div>
                        <div class="mb-3">
                          <label for="logo" class="form-label  banner-desc">Logo</label>
                          <input type="file" class="form-control  border-shortand" name="logo">
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


