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
            <select name="doctor_id" id="doctors" class="px-4 py-2 " style="width: 100%">
              <option value="">Choose Doctor</option>
              @foreach ($doctors as $doctor)
              <option value="{{ $doctor->id }}">{{ $doctor->name }}</option>
              @endforeach
            </select>
          </div>
          <?php $now = Carbon\Carbon::now()
          // $now = $now->toDateTimeString();
          ?>
          <div class="col-md-5 my-3">
            <label for="date">Choose Date</label>
            <input style="width: 100%" id="date" class="mt-1" type="date" name="tanggal" value={{ $now }} placeholder="Choose Date" min="2022-01-01" max="2022-12-31">
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