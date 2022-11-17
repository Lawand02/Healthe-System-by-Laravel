@extends('layout.master')

@section('title','Create')
@section('content')
{{-- Displaying The Validation Errors --}}
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
 

<form action="{{route('healthe.store')}}" method="POST" class="row g-3">
    @csrf
      <div class="col-md-4">
        <label for="validationDefault01" class="form-label">First name</label>
        <input type="text" name="First_name" class="form-control" id="validationDefault01" placeholder="First name" required>
      </div>
      <div class="col-md-4">
        <label for="validationDefault02" class="form-label">Last name</label>
        <input type="text" name="Last_name" class="form-control" id="validationDefault02" placeholder="Last name" required>
      </div>
      <div class="col-md-3">
        <label for="validationDefault04" class="form-label">Gender</label>
        <select class="form-select" name="Gender" id="validationDefault04" required>
          <option selected value disabled >Gender</option>
          <option>Male</option>
          <option>Fmale</option>
        </select>
      </div>
      <div class="col-md-4">
        <label for="validationDefault02" class="form-label">Email</label>
        <input type="email" name="Email" class="form-control" id="validationDefault02" placeholder="ex@gmail.com" required>
      </div>
      <div class="col-md-4">
        <label for="validationDefault02" class="form-label">Nationality</label>
        <input type="text" name="Nationality" class="form-control" id="validationDefault02" placeholder="Nationality" required>
      </div>
      
        <div class="col-md-3">
            <label for="validationDefault04" class="form-label">State</label>
            <select class="form-select" name="State" id="validationDefault04" required>
              <option selected value disabled >State</option>
              <option>Single</option>
              <option>Maried</option>
              <option>Engaged</option>
            </select>
          </div>
          <div class="col-md-4">
            <label for="validationDefault03" class="form-label">Phone</label>
            <input type="text" name="Phone" class="form-control" id="validationDefault03" placeholder="Phone Number" required>
          </div>
          <div class="col-md-4">
        <label for="validationDefault03" class="form-label">disease</label>
        <input type="text" name="The_disease" class="form-control" id="validationDefault03" placeholder="The disease" required>
      </div>
     
      
      <div class="col-md-2">
        <label for="validationDefault05" class="form-label">Birthday</label>
        <input type="date" name="Birthday" class="form-control" id="validationDefault05" required>
      </div>
      <div class="col-md-4">
        <label for="validationDefault03" class="form-label">Address</label>
        <input type="text" name="Address" class="form-control" id="validationDefault03" placeholder="E.g.Rojava" required>
      </div>

      <div class="col-md-4">
        <label for="validationDefault03" class="form-label">Doctor</label>
        <input type="text" name="Doctor_name" class="form-control" id="validationDefault03" placeholder="Doctor name" required>
      </div>
      <div class="col-md-3">
        <label for="validationDefault04" class="form-label">Blood Type</label>
        <select class="form-select" name="Blood_Type" id="validationDefault04" required>
          <option selected value disabled >Blood Type</option>
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
        <button class="btn btn-primary" type="submit">Submit</button>
      </div>
     
    </form>
    @endsection