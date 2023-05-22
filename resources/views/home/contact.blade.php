@extends('master.layout')

@section('style')
   
@endsection

@section('name')
   CONTACT
@endsection

@section('content') 
                  <table class="table ">
                    <thead class="table-dark">
                      <tr >
                        <th scope="col">#</th>
                        <th scope="col">name</th>
                        <th scope="col">email</th>
                        <th scope="col">Num</th>
                        <th scope="col">Object</th>
                        <th scope="col">Message</th>
                        <th scope="col">Delete</th>
                      </tr>
                    </thead>
                    <tbody class="table-transparent">
                      @foreach ($contacts as $contact)
                      <tr>
                        <th scope="row" >{{$contact->id}}</th>
                        <td  class="banner-desc">{{$contact->name}}</td>
                        <td  class="banner-desc"  >{{$contact->email}}</td>
                        <td  class="banner-desc" >{{$contact->num}}</td>
                        <td  class="banner-desc">{{$contact->object}}</td>
                        <td ><p class="banner-desc">{{$contact->message}}</p></td>
                        <td > <form id="{{$contact->id}}" action="{{ route('contact.delete',$contact->id) }}" method="POST">
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