@extends('dashboard.layouts.main')
{{-- @dd($patients) --}}

@section('content')
<div class="wrapper">
    
    <div class="body-overlay"></div>
  
  <!-------sidebar--design------------>
  
  @include('dashboard.partials.sidebar')
  
  <!-------sidebar--design- close----------->
  
  
  
      <!-------page-content start----------->
  
      <div id="content">
      
      <!------top-navbar-start-----------> 
        
      @include('dashboard.partials.topnavbar')
      <!------top-navbar-end-----------> 
      
      
      <!------main-content-start-----------> 
        @if (session()->has('success'))
        <div class="alert alert-success" role="alert">
          {{ session('success') }}
        </div>
        @endif 
        
        @if (session()->has('danger'))
        <div class="alert alert-danger" role="alert">
          {{ session('danger') }}
        </div>
        @endif 


          <div class="main-content pt-2">
          <div class="row">
            <div class="col-md-12">
              {{-- export btn --}}

              @if (Request::is('dashboard') || Request::is('dashboard/pasien'))
                @php
                  $href_export = '/exportpasien/pasien';
                @endphp
              @elseif (Request::is('dashboard/prj'))
                @php
                  $href_export = '/exportpasien/prj';
                @endphp
              @elseif (Request::is('dashboard/pri'))
                @php
                  $href_export = '/exportpasien/pri';
                @endphp
              @elseif (Request::is('dashboard/doctor'))
                @php
                  $href_export = '/exportdoctor';
                @endphp              
              @else
                @php
                  $href_export = '/exportuser';
                @endphp
              @endif
              
              <a href="{{ $href_export }}" class="btn btn-primary mb-1 py-0 px-1">Export</a>

            <div class="table-wrapper">
              
              <div class="table-title">
                <div class="row">
                  <div class="col-sm-6 p-0 flex justify-content-lg-start justify-content-center">
                    <h2 class="ml-lg-2">{{ $data }}</h2>
                </div>
                @if (Request::is('dashboard/pasien') || Request::is('dashboard/pri') || Request::is('dashboard/prj')) 
                  <div class="col-sm-6 p-0 flex justify-content-lg-end justify-content-center">
                    <a class="btn btn-success" data-toggle="modal" data-target="#addPatientModal">
                    <i class="material-icons">&#xE147;</i>
                    <span>Add New Patient</span>
                    </a>
                    {{-- <a href="#deleteEmployeeModal" class="btn btn-danger" data-toggle="modal">
                    <i class="material-icons">&#xE15C;</i>
                    <span>Delete</span>
                    </a> --}}
                  </div>
                @elseif (Request::is('dashboard/doctor'))
                  <div class="col-sm-6 p-0 flex justify-content-lg-end justify-content-center">
                    <a class="btn btn-success" data-toggle="modal" data-target="#addDoctorModal">
                    <i class="material-icons">&#xE147;</i>
                    <span>Add New Doctor</span>
                    </a>
                    {{-- <a href="#deleteEmployeeModal" class="btn btn-danger" data-toggle="modal">
                    <i class="material-icons">&#xE15C;</i>
                    <span>Delete</span>
                    </a> --}}
                  </div>
                @else
                  <div class="col-sm-6 p-0 flex justify-content-lg-end justify-content-center">
                    <a class="btn btn-success" data-toggle="modal" data-target="#addUserModal">
                    <i class="material-icons">&#xE147;</i>
                    <span>Add New User</span>
                    </a>
                    {{-- <a href="#deleteEmployeeModal" class="btn btn-danger" data-toggle="modal">
                    <i class="material-icons">&#xE15C;</i>
                    <span>Delete</span>
                    </a> --}}
                  </div>
                @endif

                
                </div>
              </div>
              
              @if (Request::is('dashboard') || Request::is('dashboard/pasien') || Request::is('dashboard/pri')) 
              
              <table class="table table-striped table-hover">
                <thead>
                  <tr>
                    <th><span class="custom-checkbox">
                    <input type="checkbox" id="selectAll">
                    <label for="selectAll"></label></th>
                    <th>Name</th>
                    <th>NIK</th>
                    <th>Address</th>
                    <th>Phone</th>
                    <th>Actions</th>
                  </tr>
                </thead>
              
              <tbody>
              
              @foreach ($patients as $patient)
              <tr>
                <th><span class="custom-checkbox">
                <input type="checkbox" id="checkbox1" name="option[]" value="{{ $patient->id }}">
                <label for="checkbox1"></label></th>
                <th>{{ $patient->name }}</th>
                <th>{{ $patient->NIK }}</th>
                <th>{{ $patient->alamat }}</th>
                <th>{{ $patient->no_tlp }}</th>
                <th>
                  <a href="/dashboard/pasien/{{ $patient->id }}/edit" style="color: #FFBC49" class="edit" >
                    <i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i>
                  </a>
                  <form action="/dashboard/pasien/{{ $patient->id }}" method="post" class="d-inline">
                    @method('delete')
                    @csrf
                    {{-- <a href="#deleteEmployeeModal" class="delete" data-toggle="modal"> --}}
                    <button style="background-color: transparent;" class="border-0 delete" type="submit" onclick="return confirm('Yakin ingin menghapus data {{ $patient->name }}? ')">
                      <i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i>
                    </button>
                    {{-- </a> --}}
                  </form>
                </th>
                </tr>
              @endforeach

              
              </tbody>
              
              
            </table>

              @if (!$patients->count())
              <p class="text-center">No patients found.</p>
              @endif

              <?php 
                  if (isset($_GET['page'])) {
                    $pageActive = $_GET['page'];
                  } else {
                    $pageActive = 1;
                  }
                  
                  if ($jumlah_pasien == 0) {
                    $data_tampil = 0;
                  } else {
                    $data_tampil = $patients->count();
                  }
                  
                  if (isset($_GET['search'])) {
                    $jumlah_pasien = $patients->total();
                  }
                  
                  $jml_hal = ceil($jumlah_pasien/10);
                  
                ?>

                <div class="clearfix">
                  <div class="hint-text">showing <b>{{ $data_tampil }}</b> out of <b>{{ $jumlah_pasien }}</b></div>
                  <ul class="pagination">
                    @if (isset($_GET['page']))
                      @if ($pageActive > 1)
                        <li class="page-item disabled"><a href="pasien?page={{ $pageActive - 1 }}">Previous</a></li>
                    @endif
                    @for ($i = 0; $i < $jml_hal; $i++)
                        <li class="page-item {{ ($pageActive == ($i+1)) ? 'active' : '' }}"><a href="pasien?page={{ $i + 1 }}"class="page-link">{{ $i + 1 }}</a></li>
                    @endfor
                    @if ($pageActive < $jml_hal)
                      <li class="page-item "><a href="pasien?page={{ $pageActive + 1 }}" class="page-link">Next</a></li>  
                    @endif

                    @else

                      @for ($i = 0; $i < $jml_hal; $i++)
                        <li class="page-item {{ ($i == 0) ? 'active' : '' }}"><a href="?page={{ $i + 1 }}"class="page-link">{{ $i + 1 }}</a></li>
                      @endfor
                        @if ($jml_hal != 1)
                        <li class="page-item "><a href="?page=2" class="page-link">Next</a></li>  
                        @endif
                    @endif
                </ul>
                </div>

              @elseif (Request::is('dashboard/prj'))

<table class="table table-striped table-hover">
                <thead>
                  <tr>
                    <th><span class="custom-checkbox">
                    <input type="checkbox" id="selectAll">
                    <label for="selectAll"></label></th>
                    <th>Name</th>
                    <th>NIK</th>
                    <th>Address</th>
                    <th>Phone</th>
                    <th>Dokter</th>
                    <th>Actions</th>
                  </tr>
                </thead>
              
              <tbody>
              
              @foreach ($patients as $patient)
              <tr>
                <th><span class="custom-checkbox">
                <input type="checkbox" id="checkbox1" name="option[]" value="{{ $patient->id }}">
                <label for="checkbox1"></label></th>
                <th>{{ $patient->name }}</th>
                <th>{{ $patient->NIK }}</th>
                <th>{{ $patient->alamat }}</th>
                <th>{{ $patient->no_tlp }}</th>
                <th>{{ $patient->users->first()->name }}</th>
                <th>
                  <a href="/dashboard/pasien/{{ $patient->id }}/edit" style="color: #FFBC49" class="edit" >
                    <i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i>
                  </a>
                  <form action="/dashboard/pasien/{{ $patient->id }}" method="post" class="d-inline">
                    @method('delete')
                    @csrf
                    {{-- <a href="#deleteEmployeeModal" class="delete" data-toggle="modal"> --}}
                    <button style="background-color: transparent;" class="border-0 delete" type="submit" onclick="return confirm('Yakin ingin menghapus data {{ $patient->name }}? ')">
                      <i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i>
                    </button>
                    {{-- </a> --}}
                  </form>
                </th>
                </tr>
              @endforeach

              
              </tbody>
              
              
            </table>

              @if (!$patients->count())
              <p class="text-center">No patients found.</p>
              @endif

              <?php 
                  if (isset($_GET['page'])) {
                    $pageActive = $_GET['page'];
                  } else {
                    $pageActive = 1;
                  }
                  
                  if ($jumlah_pasien == 0) {
                    $data_tampil = 0;
                  } else {
                    $data_tampil = $patients->count();
                  }
                  
                  if (isset($_GET['search'])) {
                    $jumlah_pasien = $patients->total();
                  }
                  
                  $jml_hal = ceil($jumlah_pasien/10);
                  
                ?>

                <div class="clearfix">
                  <div class="hint-text">showing <b>{{ $data_tampil }}</b> out of <b>{{ $jumlah_pasien }}</b></div>
                  <ul class="pagination">
                    @if (isset($_GET['page']))
                      @if ($pageActive > 1)
                        <li class="page-item disabled"><a href="pasien?page={{ $pageActive - 1 }}">Previous</a></li>
                    @endif
                    @for ($i = 0; $i < $jml_hal; $i++)
                        <li class="page-item {{ ($pageActive == ($i+1)) ? 'active' : '' }}"><a href="pasien?page={{ $i + 1 }}"class="page-link">{{ $i + 1 }}</a></li>
                    @endfor
                    @if ($pageActive < $jml_hal)
                      <li class="page-item "><a href="pasien?page={{ $pageActive + 1 }}" class="page-link">Next</a></li>  
                    @endif

                    @else

                      @for ($i = 0; $i < $jml_hal; $i++)
                        <li class="page-item {{ ($i == 0) ? 'active' : '' }}"><a href="?page={{ $i + 1 }}"class="page-link">{{ $i + 1 }}</a></li>
                      @endfor
                        @if ($jml_hal != 1)
                        <li class="page-item "><a href="?page=2" class="page-link">Next</a></li>  
                        @endif
                    @endif
                </ul>
                </div>

              @elseif (Request::is('dashboard/doctor'))
              <table class="table table-striped table-hover">
                <thead>
                <tr>
              <th><span class="custom-checkbox">
              <input type="checkbox" id="selectAll">
              <label for="selectAll"></label></th>
              <th>Name</th>
              <th>Email</th>
              </tr>
              </thead>
              
              <tbody>
              
              @foreach ($doctors as $doctor)
              <tr>
                <th><span class="custom-checkbox">
                <input type="checkbox" id="checkbox1" name="option[]" value="{{ $doctor->id }}">
                <label for="checkbox1"></label></th>
                <th>{{ $doctor->name }}</th>
                <th>{{ $doctor->email }}</th>
                <th>
                  <a href="/dashboard/doctor/{{ $doctor->id }}/edit" style="color: #FFBC49" class="edit" >
                    <i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i>
                  </a>
                  <form action="/dashboard/doctor/{{ $doctor->id }}" method="post" class="d-inline">
                    @method('delete')
                    @csrf
                    {{-- <a href="#deleteEmployeeModal" class="delete" data-toggle="modal"> --}}
                    <button style="background-color: transparent;" class="border-0 delete" type="submit" onclick="return confirm('Yakin ingin menghapus? ')">
                      <i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i>
                    </button>
                    {{-- </a> --}}
                  </form>
                </th>
                </tr>
              @endforeach

              
              </tbody>
              
                
            </table>

              @if (!$doctors->count())
                  <p class="text-center">No patients found.</p>
              @endif

              <?php 
                  if (isset($_GET['page'])) {
                    $pageActive = $_GET['page'];
                  } else {
                    $pageActive = 1;
                  }

                  if ($jumlah_doctor == 0) {
                    $data_tampil = 0;
                  } else {
                    $data_tampil = $doctors->count();
                  }

                  if (isset($_GET['search'])) {
                    $jumlah_doctor = $doctors->total();
                  }

                  $jml_hal = ceil($jumlah_doctor/10);
              ?>
              <div class="clearfix">
                <div class="hint-text">showing <b>{{ $data_tampil }}</b> out of <b>{{ $jumlah_doctor }}</b></div>
                <ul class="pagination">
                  @if (isset($_GET['page']))
                    @if ($pageActive > 1)
                      <li class="page-item disabled"><a href="pasien?page={{ $pageActive - 1 }}">Previous</a></li>
                  @endif
                  @for ($i = 0; $i < $jml_hal; $i++)
                      <li class="page-item {{ ($pageActive == ($i+1)) ? 'active' : '' }}"><a href="pasien?page={{ $i + 1 }}"class="page-link">{{ $i + 1 }}</a></li>
                  @endfor
                  @if ($pageActive < $jml_hal)
                    <li class="page-item "><a href="pasien?page={{ $pageActive + 1 }}" class="page-link">Next</a></li>  
                  @endif

                  @else

                    @for ($i = 0; $i < $jml_hal; $i++)
                      <li class="page-item {{ ($i == 0) ? 'active' : '' }}"><a href="?page={{ $i + 1 }}"class="page-link">{{ $i + 1 }}</a></li>
                    @endfor
                      @if ($jml_hal != 1)
                      <li class="page-item "><a href="?page=2" class="page-link">Next</a></li>  
                      @endif
                  @endif
              </ul>
              </div>

              @else

              <table class="table table-striped table-hover">
                <thead>
                <tr>
              <th><span class="custom-checkbox">
              <input type="checkbox" id="selectAll">
              <label for="selectAll"></label></th>
              <th>Name</th>
              <th>Tipe</th>
              <th>Email</th>
              </tr>
              </thead>
              
              <tbody>
              
              @foreach ($users as $user)
              <tr>
                <th><span class="custom-checkbox">
                <input type="checkbox" id="checkbox1" name="option[]" value="{{ $user->id }}">
                <label for="checkbox1"></label></th>
                <th>{{ $user->name }}</th>
                <th>{{ $user->type }}</th>
                <th>{{ $user->email }}</th>
                <th>
                  <a href="/dashboard/user/{{ $user->id }}/edit" style="color: #FFBC49" class="edit" >
                    <i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i>
                  </a>
                  <form action="/dashboard/user/{{ $user->id }}" method="post" class="d-inline">
                    @method('delete')
                    @csrf
                    {{-- <a href="#deleteEmployeeModal" class="delete" data-toggle="modal"> --}}
                    <button style="background-color: transparent;" class="border-0 delete" type="submit" onclick="return confirm('Yakin ingin menghapus? ')">
                      <i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i>
                    </button>
                    {{-- </a> --}}
                  </form>
                </th>
                </tr>
              @endforeach

              
              </tbody>
              
                
            </table>

              @if (!$users->count())
                  <p class="text-center">No patients found.</p>
              @endif

              <?php 
              if (isset($_GET['page'])) {
                  $pageActive = $_GET['page'];
                } else {
                  $pageActive = 1;
                }

                if ($jumlah_user == 0) {
                  $data_tampil = 0;
                } else {
                  $data_tampil = $users->count();
                }

                if (isset($_GET['search'])) {
                  // dd($users);
                  $jumlah_user = $users->total();
                }

                $jml_hal = ceil($jumlah_user/10);
              ?>
              <div class="clearfix">
                <div class="hint-text">showing <b>{{ $data_tampil }}</b> out of <b>{{ $jumlah_user }}</b></div>
                <ul class="pagination">
                  @if (isset($_GET['page']))
                    @if ($pageActive > 1)
                      <li class="page-item disabled"><a href="pasien?page={{ $pageActive - 1 }}">Previous</a></li>
                  @endif
                  @for ($i = 0; $i < $jml_hal; $i++)
                      <li class="page-item {{ ($pageActive == ($i+1)) ? 'active' : '' }}"><a href="pasien?page={{ $i + 1 }}"class="page-link">{{ $i + 1 }}</a></li>
                  @endfor
                  @if ($pageActive < $jml_hal)
                    <li class="page-item "><a href="pasien?page={{ $pageActive + 1 }}" class="page-link">Next</a></li>  
                  @endif

                  @else

                    @for ($i = 0; $i < $jml_hal; $i++)
                      <li class="page-item {{ ($i == 0) ? 'active' : '' }}"><a href="?page={{ $i + 1 }}"class="page-link">{{ $i + 1 }}</a></li>
                    @endfor
                      @if ($jml_hal != 1)
                      <li class="page-item "><a href="?page=2" class="page-link">Next</a></li>  
                      @endif
                  @endif
              </ul>
              </div>

              @endif

              
              
              
              
            </div>
          </div>
          
          
                    <!----add-modal start--------->
    {{-- Add modal Patient --}}
    <div class="modal fade" tabindex="-1" id="addPatientModal" role="dialog">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">Add Patients</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form action="/dashboard/pasien" method="post">
              @csrf
              <div class="form-group">
                <label for="name">Name</label>
                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autofocus>
                @error('name')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
                @enderror
              </div>
              <div class="form-group">
                <label for="nik">NIK</label>
                <input id="nik" type="text" class="form-control @error('nik') is-invalid @enderror" name="NIK" value="{{ old('NIK') }}" required>
                @error('NIK')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
                @enderror
              </div>
              <div class="my-3">
                <label for="pasien">Pasien</label><br>
                <select id="pasien" class="form-select" aria-label="Default select example" name="type">
                    <option value="App\Models\Inpatient" selected>Pasien Rawat Inap</option>
                    <option value="App\Models\Outpatient">Pasien Rawat Jalan</option>
                </select>
                @error('type')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
              </div>
              <div class="form-group">
                <label for="alamat">Address</label>
                <textarea id="alamat" class="form-control @error('alamat') is-invalid @enderror" name="alamat" value="{{ old('alamat') }}" required></textarea>
                @error('alamat')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
                @enderror
              </div>
              <label>Jenis Kelamin</label><br>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="jenis_kelamin" id="pria" value=1>
                <label class="form-check-label" for="pria">Pria</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="jenis_kelamin" id="wanita" value=0>
                <label class="form-check-label" for="wanita">Wanita</label>
              </div>
              @error('jenis_kelamin')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
                <div class="form-group">
                  <label for="phone">Phone</label>
                  <input id="phone" type="text" class="form-control @error('no_tlp') is-invalid @enderror" name="no_tlp" value="{{ old('no_tlp') }}" required>
                  @error('no_tlp')
                    <div class="invalid-feedback">
                      {{ $message }}
                    </div>
                  @enderror
                </div>
              {{-- <div class="form-group">
                <label for="email">Email</label>
                <input id="email" type="text" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required>
                @error('email')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
                @enderror
              </div> --}}
              <div class="modal-footer" style="margin: 0 -30px">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                <button type="submit" class="btn btn-success">Add</button>
              </div>
            </form>
          </div> 
        </div>
      </div>
    </div>


    {{-- Add modal Doctor --}}
    <div class="modal fade" tabindex="-1" id="addDoctorModal" role="dialog">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">Add Doctor</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form action="/dashboard/doctor" method="post">
              @csrf
              <div class="form-group">
                <label for="name">Name</label>
                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autofocus>
                @error('name')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
                @enderror
              </div>
              <div class="form-group">
                <label for="username">Username</label>
                <input id="username" type="text" class="form-control @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}" required>
                @error('username')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
                @enderror
              </div>
              
              <input type="hidden" value="doctor" name="type">
              {{-- default password --}}
              <div class="form-group">
                <label for="password">Password</label>
                <input type="text" id="password" class="form-control @error('password') is-invalid @enderror" name="password" value="{{ old('password') }}" required></input>
                @error('password')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
                @enderror
              </div>

              <div class="form-group">
                <label for="email">Email</label>
                <input type="text" id="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required></input>
                @error('email')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
                @enderror
              </div>
              <div class="modal-footer" style="margin: 0 -30px">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                <button type="submit" class="btn btn-success">Add</button>
              </div>
            </form>
          </div> 
        </div>
      </div>
    </div>

    {{-- Add modal User --}}
    <div class="modal fade" tabindex="-1" id="addUserModal" role="dialog">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">Add User</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form action="/dashboard/user" method="post">
              @csrf
              <div class="form-group">
                <label for="name">Name</label>
                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autofocus>
                @error('name')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
                @enderror
              </div>
              <div class="form-group">
                <label for="username">Username</label>
                <input id="username" type="text" class="form-control @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}" required>
                @error('username')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
                @enderror
              </div>
              
              <div class="my-3">
                <label for="tipe">Tipe</label><br>
                <select id="tipe" class="form-select" aria-label="Default select example" name="type">
                    <option value="admin" selected>Admin</option>
                    <option value="doctor">Doctor</option>
                    <option value="staff">Staff</option>
                </select>
                @error('type')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
              </div>

              <div class="form-group">
                <label for="email">Email</label>
                <input type="text" id="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required></input>
                @error('email')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
                @enderror
              </div>

              {{-- default password --}}
              <div class="form-group">
                <label for="password">Password</label>
                <input type="text" id="password" class="form-control @error('password') is-invalid @enderror" name="password" value="{{ old('password') }}" required></input>
                @error('password')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
                @enderror
              </div>

              <div class="modal-footer" style="margin: 0 -30px">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                <button type="submit" class="btn btn-success">Add</button>
              </div>
            </form>
          </div> 
        </div>
      </div>
    </div>

            <!----add-modal end--------->
            
            
            
            
            
          <!----edit-modal start--------->
    {{-- <div class="modal fade" tabindex="-1" id="editPatientModal" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Edit Patients</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="/dashboard/pasien/{{ $patient }}" method="post">
          @method('put')
          @csrf
          <div class="form-group">
            <label for="name">Name</label>
            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autofocus>
            @error('name')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
            @enderror
          </div>
          <div class="form-group">
            <label for="nik">NIK</label>
            <input id="nik" type="text" class="form-control @error('nik') is-invalid @enderror" name="NIK" value="{{ old('NIK') }}" required>
            @error('NIK')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
            @enderror
          </div>
          <div class="my-3">
            <label for="pasien">Pasien</label><br>
            <select id="pasien" class="form-select" aria-label="Default select example" name="type">
                <option value="App\Models\Inpatient" selected>Pasien Rawat Inap</option>
                <option value="App\Models\Outpatient">Pasien Rawat Jalan</option>
            </select>
            @error('type')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
          </div>
          <div class="form-group">
            <label for="alamat">Address</label>
            <textarea id="alamat" class="form-control @error('alamat') is-invalid @enderror" name="alamat" value="{{ old('alamat') }}" required></textarea>
            @error('alamat')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
            @enderror
          </div>
          <label>Jenis Kelamin</label><br>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="jenis_kelamin" id="pria" value=1>
            <label class="form-check-label" for="pria">Pria</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="jenis_kelamin" id="wanita" value=0>
            <label class="form-check-label" for="wanita">Wanita</label>
          </div>
          @error('jenis_kelamin')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
            <div class="form-group">
              <label for="phone">Phone</label>
              <input id="phone" type="text" class="form-control @error('no_tlp') is-invalid @enderror" name="no_tlp" value="{{ old('no_tlp') }}" required>
              @error('no_tlp')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
              @enderror
            </div>
            <div class="modal-footer" style="margin: 0 -30px">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
              <button type="button" class="btn btn-success">Save</button>
            </div>
        </form>
      </div>
    </div>
  </div>
</div> --}}

            <!----edit-modal end--------->	   
            
            
          <!----delete-modal start--------->
    <div class="modal fade" tabindex="-1" id="deleteEmployeeModal" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Delete Patients</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>Are you sure you want to delete this Records</p>
    <p class="text-warning"><small>this action Cannot be Undone,</small></p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
        <button type="button" class="btn btn-success">Delete</button>
      </div>
    </div>
  </div>
</div>

            <!----edit-modal end--------->   
            
          
          
        
          </div>
        </div>
      
        <!------main-content-end-----------> 

    </div>
  
</div>



<!-------complete html----------->

@endsection






