@extends('master.layout')

@section('style')
   
    
@endsection

@section('name')
    Categories
@endsection

@section('content') 
             @if (session()->has('success'))
                 <div class="alert alert-success">
                  {{ session()->get('success') }}
                 </div>
             @endif
                  <table class="table ">
                    <thead>
                      <tr class="table-success">
                        <th scope="col">#</th>
                        <th scope="col">name</th>
                        <th scope="col">Edit</th>
                        <th scope="col">delete</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach ($categories as $category)
                      <tr>
                        <th scope="row">{{$category->id}}</th>
                        <td>{{$category->name}}</td>
                        <td> <a class="btn btn-outline-success" href="{{ route('category.edit',$category->id) }}">Edit</a></td>
                        <td> <form id="{{$category->id}}" action="{{ route('category.delete',$category->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                        </form>
                            <button 
                            onclick="event.preventDefault();
                            if(confirm('are you sure?'))
                            document.getElementById({{$category->id}}).submit();"
                            class="btn btn-outline-danger" type="submit">
                                Delete
                            </button>
                        </td>
                      </tr>
                      @endforeach
                    </tbody>
                  </table>  
@endsection
@section('script')
    
@endsection