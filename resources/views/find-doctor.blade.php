@extends('layouts.main')

@section('container')

<div class="background-find-doctor">
  <div class="container" style="padding-top: 100px; ">

    <div class="row mb-5" id="app-h1" style="font-family: 'Open Sans', sans-serif; line-height: 1.5">
      <div class="col-md-6">
        <h1>BOOK AN APPOINTMENT AT</h1>
        <h1 style="font-weight: 900">DR. AYANO HOSPITAL</h1>
      </div>
    </div>
  
    <form action="/find-doctor" method="post">
      @csrf
      <div class="row">
        <div class="col-md-12">
  
          <div class="col-md-5 mb-3">
            <select name="speciality_id" id="specialities" class="px-4 py-2 " style="width: 100%">
              <option value="">Choose Speciality</option>
              @foreach ($specialities as $speciality)
              <option value="{{ $speciality->id }}">{{ $speciality->name }}</option>
              @endforeach
            </select>
          </div>

          <div class="col-md-5 mb-3">
            <select name="doctor_id" id="doctors" class="px-4 py-2 " style="width: 100%">
              <option value="">Choose Doctor</option>
            </select>
          </div>

          <div class="col-md-5 my-3">
            <input type="datetime-local" class="form-control" placeholder="Select date">
          </div>
  
          <div class="col-md-5 mb-3">
            <select name="jam" id="cars" class="px-4 py-2 " style="width: 100%">
              <option value="">Choose Time</option>
              <option value="10:00:00">10:00</option>
              <option value="11:00:00">11:00</option>
              <option value="12:00:00">12:00</option>
              <option value="13:00:00">13:00</option>
            </select>
          </div>
  
        </div>
      </div>
  
      <button type="submit" class="btn btn-success px-4 py-2">Book</button>
  
    </form>
  
  </div>
</div>

@include('partials.footer')

@endsection