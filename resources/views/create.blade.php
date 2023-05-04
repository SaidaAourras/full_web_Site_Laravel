{{-- <form method="POST" action="/categorys" enctype="multipart/form-data">
    @csrf
    <div class="mb-6">
        <label for="name" class="inline-block text-lg mb-2">Company Name</label>
        <input type="text" class="border border-gray-200 rounded p-2 w-full" name="name" />

    </div>


    <div class="mb-6">
        <button class="bg-laravel text-white rounded py-2 px-4 hover:bg-black">
            Create Gig
        </button>

        <a href="/" class="text-black ml-4"> Back </a>
    </div>
</form>



<table>
    <tr>
        <th>id</th>
        <th>name</th>
        <th>action</th>
    </tr>
    @foreach ($categorys as $category)
        <tr>
            <td>{{ $category['id'] }}</td>
            <td>{{ $category['name'] }}</td>
            <td>
                <form method="POST" action="/categorys/{{ $category->id }}">
                    @csrf
                    @method('DELETE')
                    <button class="text-red-500"><i class="fa-solid fa-trash"></i> Delete</button>
                </form>
                <a href="/categorys/{{ $category->id }}/edit">edit</a>
            </td>
        </tr>
    @endforeach

</table>



<form method="POST" action="/projects" enctype="multipart/form-data">
    @csrf
    <div class="mb-6">
        <label for="link" class="inline-block text-lg mb-2">link</label>
        <input type="text" class="border border-gray-200 rounded p-2 w-full" name="link" />

    </div>
    <div class="mb-6">
        <label for="image" class="inline-block text-lg mb-2">image</label>
        <input type="text" class="border border-gray-200 rounded p-2 w-full" name="image" />

    </div>
    <div class="mb-6">
        <label for="title" class="inline-block text-lg mb-2">title</label>
        <input type="text" class="border border-gray-200 rounded p-2 w-full" name="title" />

    </div>
    <div class="mb-6">
        <label for="discp" class="inline-block text-lg mb-2">discp</label>
        <input type="text" class="border border-gray-200 rounded p-2 w-full" name="discp" />

    </div>

    <label for="discp" class="inline-block text-lg mb-2">category</label>

    <select name="category_id">
        @foreach ($categorys as $category)
            <option value="{{ $category->id }}">{{ $category->name }}</option>
        @endforeach
    </select>


    <div class="mb-6">
        <button class="bg-laravel text-white rounded py-2 px-4 hover:bg-black">
            Create Gig
        </button>

        <a href="/" class="text-black ml-4"> Back </a>
    </div>
</form> --}}



{{-- ---------------------------------------------------------------------------- --}}



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
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">
                    add
                </h3>
            </div>
            <div class="card-body">
                <form action="{{route('reference.store')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <form>
                        <div class="mb-3">
                          <label for="name" class="form-label">Name</label>
                          <input type="text" class="form-control" name="name"placeholder="name">
                        </div>
                        <div class="mb-3">
                          <label for="logo" class="form-label">Logo</label>
                          <input type="file" class="form-control" name="logo">
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


