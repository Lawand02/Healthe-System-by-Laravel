@extends('layout.master')
@section('title','View')
@section('content')
<style>
    /* .table th:first-child,
    .table td:first-child {
      position: relative;
      background-color: #f8f9fa;
    } */
    </style>






<div class="container">
    <div class="row justify-content-start">
       
        <div class="col-xs-11 col-sm-11 col-md-11 col-lg-10 col-xl-10 col-xxl-10">
            <div class="row pt-2">
                <div class="col ps-4">
                    <h1 class="display-6 mb-3">
                        <i class="bi bi-person-lines-fill"></i> Patient
                    </h1>
                   
                    
                    <div class="mb-4">
                        <div class="row">
                            <div class="col-sm-4 col-md-3">
                                <div class="card bg-light">
                                    <div class="px-5 pt-2">
                                     
                                            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRDHvxECr6-N4lU6c2efsKI7tOqSkPDKv0547RO3qnKPH2llLXIVsWzsXtFsJYitvDdbR4&usqp=CAU" class="rounded-3 card-img-top" alt="Profile photo">
                                      
                                        
                                    </div>
                                    <div class="card-body">
                                        <h5 class="card-title">{{$healthe->First_name}} {{$healthe->Last_name}}</h5>
                                        <p class="card-text">#ID: </p>
                                    </div>
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item">Gender: {{$healthe->Gender}}</li>
                                        <li class="list-group-item">Phone: {{$healthe->Phone}}</li>
                                        {{-- <li class="list-group-item"><a href="#">View Marks &amp; Results</a></li> --}}
                                    </ul>
                                </div>
                            </div>
                            <div class="col-sm-8 col-md-9">
                                <div class="p-3 mb-3 border rounded bg-white">
                                    <h6>Patient Information</h6>
                                    <table  class="table table-responsive mt-3">
                                        <tbody>
                                            <tr >
                                                <th scope="row">First Name:</th>
                                                <td>{{$healthe->First_name}}</td>
                                                <th>Last Name:</th>
                                                <td>{{$healthe->Last_name}}</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Email:</th>
                                                <td>{{$healthe->Email}}</td>
                                                <th>Birthday:</th>
                                                <td>{{$healthe->Birthday}}</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Nationality:</th>
                                                <td>{{$healthe->Nationality}}</td>
                                                <th>State:</th>
                                                <td>{{$healthe->State}}</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Address:</th>
                                                <td>{{$healthe->Address}}</td>
                                                <th>Address2:</th>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Doctor:</th>
                                                <td>{{$healthe->Doctor_name}}</td>
                                                <th>Disease:</th>
                                                <td>{{$healthe->The_disease}}</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Blood Type:</th>
                                                <td>{{$healthe->Blood_Type}}</td>
                                                <th>Phone:</th>
                                                <td>{{$healthe->Phone}}</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Gender:</th>
                                                <td colspan="3">{{$healthe->Gender}}</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="p-3 mb-3 border rounded bg-white">
                                    <h6>Parents' Information</h6>
                                    <table class="table table-responsive mt-3">
                                        <tbody>
                                            <tr>
                                                <th scope="row">Father's Name:</th>
                                                <td></td>
                                                <th>Mother's Name:</th>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Father's Phone:</th>
                                                <td></td>
                                                <th>Mother's Phone:</th>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Address:</th>
                                                <td colspan="3"></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                               
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
</div>
@endsection

  
 

