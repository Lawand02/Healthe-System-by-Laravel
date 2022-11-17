@extends('layout.master')

@section('title','Edit')
@section('content')


<form action="{{route('healthe.update',$healthe->id)}}" method="POST" class="row g-3">
    @csrf
    @method('PUT')
      <div class="col-md-4">
        <label for="validationDefault01" class="form-label">First name</label>
        <input type="text" name="First_name" class="form-control" id="validationDefault01" value="{{$healthe->First_name}}" required>
      </div>
      <div class="col-md-4">
        <label for="validationDefault02" class="form-label">Last name</label>
        <input type="text" name="Last_name" class="form-control" id="validationDefault02" value="{{$healthe->Last_name}}" required>
      </div>
      <div class="col-md-3">
        <label for="validationDefault04" class="form-label">Gender</label>
        <select class="form-select" name="Gender" id="validationDefault04" required>
          <option  >{{$healthe->Gender}}</option>
          <option>Male</option>
          <option>Fmale</option>
        </select>
      </div>
      <div class="col-md-4">
        <label for="validationDefault02" class="form-label">Email</label>
        <input type="email" name="Email" class="form-control" id="validationDefault02" value="{{$healthe->Email}}" required>
      </div>
      <div class="col-md-4">
        <label for="validationDefault02" class="form-label">Nationality</label>
        <input type="text" name="Nationality" class="form-control" id="validationDefault02" value="{{$healthe->Nationality}}" required>
      </div>
      
        <div class="col-md-3">
            <label for="validationDefault04" class="form-label">State</label>
            <select class="form-select" name="State" id="validationDefault04" required>
              <option >{{$healthe->State}}</option>
              <option>Single</option>
              <option>Maried</option>
              <option>Engaged</option>
            </select>
          </div>
          <div class="col-md-4">
            <label for="validationDefault03" class="form-label">Phone</label>
            <input type="text" name="Phone" class="form-control" id="validationDefault03" value="{{$healthe->Phone}}"  required>
          </div>
          <div class="col-md-4">
        <label for="validationDefault03" class="form-label">disease</label>
        <input type="text" name="The_disease" class="form-control" id="validationDefault03" value="{{$healthe->The_disease}}"  required>
      </div>
     
      
      <div class="col-md-2">
        <label for="validationDefault05" class="form-label">Birthday</label>
        <input type="date" name="Birthday" class="form-control" id="validationDefault05" value="{{$healthe->Birthday}}"  required>
      </div>
      <div class="col-md-4">
        <label for="validationDefault03" class="form-label">Address</label>
        <input type="text" name="Address" class="form-control" id="validationDefault03" value="{{$healthe->Address}}"  required>
      </div>

      <div class="col-md-4">
        <label for="validationDefault03" class="form-label">Doctor</label>
        <input type="text" name="Doctor_name" class="form-control" id="validationDefault03" value="{{$healthe->Doctor_name}}"  required>
      </div>
      <div class="col-md-3">
        <label for="validationDefault04" class="form-label">Blood Type</label>
        <select class="form-select" name="Blood_Type" id="validationDefault04" required>
          <option >{{$healthe->Blood_Type}}</option>
          <option>A+</option>
          <option>A-</option>
          <option>B+</option>
          <option>B-</option>
          <option>O+</option>
          <option>O-</option>
           <option>AB+</option>
           <option>AB-</option>
           <option>Others</option>
        </select>
      </div>
      
      <div class="col-12">
        <button class="btn btn-primary" type="submit">Update</button>
      </div>
     
    </form>
    @endsection