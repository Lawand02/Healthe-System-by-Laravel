@extends('layout.master')
@section('title','Patient')
@section('content')


<table class="table table-striped
">
    <thead>
      <tr>
        <th scope="col">id</th>
        <th scope="col">First Name</th>
        <th scope="col">Last Name</th>
        <th scope="col">State</th>
        <th scope="col">The Disease</th>
        <th scope="col">Address</th>
        <th scope="col">Date</th>
        <th scope="col">Phone</th>
        <th scope="col">Gender</th>
        <th scope="col">Email</th>
        <th scope="col">Doctor</th>
        <th scope="col">Nationality</th>
        <th scope="col">Blood Type</th>
        
    
      </tr>
    </thead>
    <tbody>
      
      
      @foreach ($healthe as $healthe)
      <tr>
      
        
        <th scope="row">{{$healthe->id}}</th>
        <td>{{$healthe->First_name}}</td>
        <td>{{$healthe->Last_name}}</td>
        <td>{{$healthe->State}}</td>
        <td>{{$healthe->The_disease}}</td>
        <td>{{$healthe->Address}}</td>
        <td>{{$healthe->Birthday}}</td>
        <td>{{$healthe->Phone}}</td>
        <td>{{$healthe->Gender}}</td>
        <td>{{$healthe->Email}}</td>
        <td>{{$healthe->Doctor_name}}</td>
        <td>{{$healthe->Nationality}}</td>
        <td>{{$healthe->Blood_Type}}</td>
        <td>
          
          
          <a class="btn btn-success" href="{{route('healthe.restore',$healthe->id)}}" role="button" >Restore</a>
          
           <form style="display: inline" action="{{route('healthe.delete',$healthe->id)}}" method="GET" > 
            
            @csrf
            <button type="submit" class="btn btn-danger" >Delete</button>
           
          </form>
           
          {{-- 
          <a class="btn btn-dark" href="{{route('patient.view',$patient->id)}}" role="button" >View</a>
          <a class="btn btn-danger" href="{{route('patient.delete.all')}}" role="button" >Delete All</a>
           --}}
      

        </td>

      </tr>
      @endforeach
    
    </tbody>
  </table>
  @endsection  