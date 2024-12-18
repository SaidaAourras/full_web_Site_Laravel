@extends('master.layout')

@section('style')
   
    
@endsection

@section('name')
    Acceuil
@endsection

@section('content') 
             @if (session()->has('success'))
                 <div class="alert alert-success">
                  {{ session()->get('success') }}
                 </div>
             @endif
                  <table class="table ">
                    <thead class="table-dark">
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">name</th>
                        <th scope="col">logo</th>
                        <th scope="col">Edit</th>
                        <th scope="col">delete</th>
                      </tr>
                    </thead>
                    <tbody class="table-transparent">
                      @foreach ($references as $reference)
                      <tr>
                        <th class="banner-desc" scope="row">{{$reference->id}}</th>
                        <td class="banner-desc">{{$reference->name}}</td>
                        <td><img src="{{ asset('./uploads/'.$reference->logo)}}" width="50"></td>
                        <td class="banner-desc"> <a class="btn btn-outline-success" href="{{ route('reference.edit',$reference->id) }}">Edit</a></td>
                        <td> <form id="{{$reference->id}}" action="{{ route('reference.delete',$reference->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                        </form>
                            <button 
                            onclick="event.preventDefault();
                            if(confirm('are you sure?'))
                            document.getElementById({{$reference->id}}).submit();"
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