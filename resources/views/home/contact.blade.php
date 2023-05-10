@extends('master.layout')

@section('style')
   <style>
    .card-text-td {
      max-width: 400px; /* ajustez la largeur maximale selon vos besoins */
      word-wrap: break-word;
      overflow-wrap: break-word;
    }
    </style>
@endsection

@section('name')
   CONTACT
@endsection

@section('content') 
                  <table class="table ">
                    <thead>
                      <tr class="table-success">
                        <th scope="col">#</th>
                        <th scope="col">name</th>
                        <th scope="col">email</th>
                        <th scope="col">Num</th>
                        <th scope="col">Object</th>
                        <th scope="col">Message</th>
                        <th scope="col">Delete</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach ($contacts as $contact)
                      <tr>
                        <th scope="row">{{$contact->id}}</th>
                        <td>{{$contact->name}}</td>
                        <td>{{$contact->email}}</td>
                        <td>{{$contact->num}}</td>
                        <td>{{$contact->object}}</td>
                        <td class="card-text-td"><p class="card-text">{{$contact->message}}</p></td>
                        <td> <form id="{{$contact->id}}" action="{{ route('contact.delete',$contact->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                        </form>
                            <button 
                            onclick="event.preventDefault();
                            if(confirm('are you sure?'))
                            document.getElementById({{$contact->id}}).submit();"
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