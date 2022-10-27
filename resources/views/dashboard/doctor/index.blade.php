@extends('dashboard.layouts.main')

@section('content')
  


<div class="wrapper">
    
    <div class="body-overlay"></div>
  
  <!-------sidebar--design------------>
  
  @include('dashboard.partials.sidebar')
  
  <!-------sidebar--design- close----------->
  
  
  
      <!-------page-content start----------->
  
      <div id="content">
      
      <!------top-navbar-start-----------> 
        
      <div class="top-navbar">
        <div class="xd-topbar">
          <div class="row">
            <div class="col-2 col-md-1 col-lg-1 order-2 order-md-1 align-self-center">
              <div class="xp-menubar">
                <span class="material-icons text-white">signal_cellular_alt</span>
            </div>  
          </div>
          
          <div class="col-md-5 col-lg-3 order-3 order-md-2">
              <div class="xp-searchbar">
                <form>
                  <div class="input-group">
                  <input type="search" class="form-control"
                  placeholder="Search" name="search" value="{{ request('search') }}">
                  <div class="input-group-append">
                    <button class="btn" type="submit" id="button-addon2">Go
                  </button>
                  </div>
                </div>
              </form>
            </div>
          </div>
          
          
          <div class="col-10 col-md-6 col-lg-8 order-1 order-md-3">
              <div class="xp-profilebar text-right">
                <nav class="navbar p-0">
                <ul class="nav navbar-nav flex-row ml-auto">
                <p>Welcome back {{ (Auth::user()->name) }}</p>
                <li class="dropdown nav-item">
                  <a class="nav-link" href="#" data-toggle="dropdown">
                  <img src="{{ asset('import/img/user.jpg') }}" style="width:40px; border-radius:50%;"/>
                  <span class="xp-user-live"></span>
                </a>
                  <ul class="dropdown-menu small-menu px-2">
                  <a href="/doctor/doctor/{{ Auth::user()->id }}/edit" style="font-size: 15px; padding-left: 0; margin-left:-5px" class="px-0">
                    <i class="bi bi-person-lines-fill" style="margin-right: 5px"></i>Edit Profile
                  </a>
                  <li>
                    <form action="/logout" method="post">
                      @csrf
                      <button type="submit" style="font-size: 14px;">
                        <i class="bi bi-box-arrow-right" style="margin-right: 3px;"></i> Logout
                      </button>
                    </form>
                  </li>
                  </ul>
                </li>
                
                
                </ul>
              </nav>
            </div>
          </div>
          
        </div>
        
        <div class="xp-breadcrumbbar text-center">
            <h4 class="page-title">Dashboard</h4>
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">{{ $type }}</a></li>
            <li class="breadcrumb-item active" aria-curent="page">Dashboard</li>
          </ol>
        </div>
        
        
      </div>
      </div>
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

              @if (Request::is('doctor/prj'))
                @php
                  $href_export = '/doctor/exportprj';
                @endphp
              @elseif (Request::is('doctor/appointment'))
                @php
                  $href_export = '/exportdoctor';
                @endphp              
              @else
                @php
                  $href_export = '/exportuser';
                @endphp
              @endif

              <a href="{{ $href_export }}" class="btn btn-primary mb-1 py-0 px-1">Export</a>

              {{-- @dd(Auth::user()->poli_id) --}}
              {{-- @dd($poli->get()->all()) --}}
              @if (Request::is('doctor/prj'))
              @php 
                if ($poli->get()->all() != null) {
                  $poli = $poli->get()->all();
                  $nama_poli = " Poli " . $poli[0]->name;
                } else {
                  $nama_poli = "";
                }
              @endphp
              @endif
              {{-- @dd($poli[0]->name) --}}

            <div class="table-wrapper">
              
              <div class="table-title">
                <div class="row">
                  <div class="col-sm-6 p-0 flex justify-content-lg-start justify-content-center">
                    @if (Request::is('doctor/prj'))
                      <h2 class="ml-lg-2">{{ $data . $nama_poli }}</h2>
                    @else
                      <h2 class="ml-lg-2">{{ $data }}</h2>  
                    @endif
                </div>
                <div class="col-sm-6 p-0 flex justify-content-lg-end justify-content-center">
                  {{-- <a class="btn btn-success" data-toggle="modal" data-target="#addPatientModal">
                  <i class="material-icons">&#xE147;</i>
                  <span>Add New Patient</span>
                  </a> --}}
                  {{-- <a href="#deleteEmployeeModal" class="btn btn-danger" data-toggle="modal">
                  <i class="material-icons">&#xE15C;</i>
                  <span>Delete</span>
                  </a> --}}
                </div>
                </div>
              </div>
              
              @if (Request::is('doctor/prj'))
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
              
              @foreach ($outpatients as $outpatient)
              <tr>
                <th><span class="custom-checkbox">
                <input type="checkbox" id="checkbox1" name="option[]" value="{{ $outpatient->id }}">
                <label for="checkbox1"></label></th>
                <th>{{ $outpatient->name }}</th>
                <th>{{ $outpatient->NIK }}</th>
                <th>{{ $outpatient->alamat }}</th>
                <th>{{ $outpatient->no_tlp }}</th>
                <th class="text-center">
                  <button style="border: none; background-color:transparent;" id="show-patient" data-url={{ route('prj.show', $outpatient->id) }} data-toggle="modal" data-target="#showPatientModal"><i style="color: #FFBC49" class="bi bi-eye"></i></button>
                </th>
                </tr>
              @endforeach

              
              </tbody>
              
                
            </table>

            @if (!$outpatients->count())
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
                $data_tampil = $outpatients->count();
              }

              if (isset($_GET['search'])) {
                $jumlah_pasien = $outpatients->total();
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
              @endif

              @if (Request::is('doctor/appointment'))
              <table class="table table-striped table-hover">
                <thead>
                <tr>
              <th><span class="custom-checkbox">
              <input type="checkbox" id="selectAll">
              <label for="selectAll"></label></th>
              {{-- <th>Name</th>
              <th>NIK</th> --}}
              <th>Tanggal</th>
              <th>Jam</th>
              <th>Actions</th>
              </tr>
              </thead>
              
              <tbody>
              {{-- @dd($appointments) --}}
              @foreach ($appointments as $appointment)
              <tr>
                <th><span class="custom-checkbox">
                <input type="checkbox" id="checkbox1" name="option[]" value="{{ $appointment->id }}">
                <label for="checkbox1"></label></th>
                <th>{{ \Carbon\Carbon::parse($appointment->tanggal)->format('d/m/Y')}}</th>
                <th>{{ $appointment->jam }}</th>
                <th class="text-center">
                  <a href="/doctor/appointment/{{ $appointment->id }}" style="color: #FFBC49" class="edit" >
                    <i class="bi bi-eye"></i>
                  </a>

                  {{-- <form action="/doctor/appointment/{{ $appointment->id }}" method="post" class="d-inline">
                    @method('delete')
                    @csrf
                    <button style="background-color: transparent;" class="border-0 delete" type="submit" onclick="return confirm('Yakin ingin menghapus? ')">
                      <i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i>
                    </button>
                  </form> --}}

                </th>
                </tr>
              @endforeach

              
              </tbody>
              
                
            </table>

            @if (!$appointments->count())
                <p class="text-center">No patients found.</p>
            @endif
            
            <?php 
              if (isset($_GET['page'])) {
                $pageActive = $_GET['page'];
              } else {
                $pageActive = 1;
              }

              if ($jumlah_appointment == 0) {
                $data_tampil = 0;
              } else {
                $data_tampil = 10;
              }
            ?>
            <div class="clearfix">
              <div class="hint-text">showing <b>{{ ($pageActive == $jml_hal) ? $jumlah_appointment%10 : $data_tampil }}</b> out of <b>{{ $jumlah_appointment }}</b></div>
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

              @if (Request::is('doctor/resep'))
              <table class="table table-striped table-hover">
                <thead>
                <tr>
              <th><span class="custom-checkbox">
              <input type="checkbox" id="selectAll">
              <label for="selectAll"></label></th>
              <th>Name</th>
              <th>Detail Resep</th>
              <th>Tanggal</th>
              </tr>
              </thead>
              
              <tbody>
              
              @foreach ($recipes as $recipe)
              <tr>
                <th><span class="custom-checkbox">
                <input type="checkbox" id="checkbox1" name="option[]" value="{{ $recipe->id }}">
                <label for="checkbox1"></label></th>
                <th>{{ $recipe->nama_resep }}</th>
                <th>{{ $recipe->detail_resep }}</th>
                <th>{{ $recipe->tgl_resep }}</th>
                <th>
                  <a href="/doctor/resep/{{ $recipe->id }}/edit" style="color: #FFBC49" class="edit" >
                    <i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i>
                  </a>
                  <a href="/doctor/resep/{{ $recipe->id }}">
                    <i class="material-icons" data-toggle="tooltip" title="Lihat">visibility</i>
                  </a>
                  {{-- <form action="/doctor/resep/{{ $recipe->id }}" method="post" class="d-inline">
                    @method('delete')
                    @csrf --}}
                    {{-- <a href="#deleteEmployeeModal" class="delete" data-toggle="modal"> --}}
                    {{-- <button style="background-color: transparent;" class="border-0 delete" type="submit" onclick="return confirm('Yakin ingin menghapus? ')">
                      
                    </button> --}}
                    {{-- </a> --}}
                  {{-- </form> --}}
                </th>
                </tr>
              @endforeach

              
              </tbody>
              
                
            </table>

            @if (!$recipes->count())
                <p class="text-center">No patients found.</p>
            @endif
            
            <?php 
              if (isset($_GET['page'])) {
                $pageActive = $_GET['page'];
              } else {
                $pageActive = 1;
              }

              if ($jumlah_recipe == 0) {
                $data_tampil = 0;
              } else {
                $data_tampil = 10;
              }
            ?>
            <div class="clearfix">
              <div class="hint-text">showing <b>{{ ($pageActive == $jml_hal) ? $jumlah_recipe%10 : $data_tampil }}</b> out of <b>{{ $jumlah_recipe }}</b></div>
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

            <!----add-modal end--------->
            
            
            
            
            
          <!----edit-modal start--------->
<div class="modal fade" tabindex="-1" id="showPatientModal" role="dialog">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">Patient Data</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
              <div class="form-group">
                <label for="name">Name</label>
                <input id="pasien-nama" type="text" class="form-control" name="name" value="" readonly>
              </div>
              <div class="form-group">
                <label for="nik">NIK</label>
                <input id="pasien-nik" type="text" class="form-control" name="NIK" value="" readonly>
              </div>
              <div class="my-3">
                <label for="pasien">Pasien</label><br>
                <input id="pasien-type" type="text" class="form-control" name="type" value="" readonly>
              </div>
              <div class="form-group">
                <label for="alamat">Address</label>
                <textarea id="pasien-alamat" class="form-control" name="alamat" value="" readonly>
                </textarea>
              </div>
              <label>Jenis Kelamin</label><br>
              <input id="pasien-jk" type="text" class="form-control" name="NIK" value="" readonly>
              <div class="form-group">
                <label for="phone">Phone</label>
                <input id="pasien-phone" type="text" class="form-control" name="no_tlp" value="" readonly>
              </div>
                <div class="modal-footer" style="margin: 0 -30px">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </form>
          </div>
        </div>
      </div>
    </div>

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