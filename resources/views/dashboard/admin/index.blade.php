<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
        <title>{{ $title }}</title>
      <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="{{ asset('import/css/bootstrap.min.css') }}">
      <!----css3---->
        <link rel="stylesheet" href="{{ asset('import/css/custom.css') }}">
    
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">

    <!--google fonts -->
      <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
  
  
    <!--google material icon-->
      <link href="https://fonts.googleapis.com/css2?family=Material+Icons"rel="stylesheet">

  </head>
  <body>
  


<div class="wrapper">
    
    <div class="body-overlay"></div>
  
  <!-------sidebar--design------------>
  
  <div id="sidebar">
      <div class="sidebar-header">
      <h3><img src="{{ asset('img/rs-logo.svg') }}" style="height: 40px;"class="img-fluid"/><span>RS Dr. Ayano</span></h3>
    </div>
    <ul class="list-unstyled component m-0">
      
      <li class="dropdown">
      <a href="#homeSubmenu1" data-toggle="collapse" aria-expanded="false" 
      class="dropdown-toggle">
      <i class="material-icons">personal_injury</i>Pasien
      </a>
        <ul class="collapse list-unstyled menu" id="homeSubmenu1">
          <li class="{{ Request::is('dashboard/pasien') ? 'active' : '' }}"><a href="/dashboard/pasien">Pasien</a></li>
          <li class="{{ Request::is('dashboard/pri') ? 'active' : '' }}"><a href="/dashboard/pri">Pasien Rawat Inap</a></li>
          <li class="{{ Request::is('dashboard/prj') ? 'active' : '' }}"><a href="/dashboard/prj">Pasien Rawat Jalan</a></li>
        </ul>
      </li>

      {{-- <li class="dropdown">
        <a href="#homeSubmenu2" data-toggle="collapse" aria-expanded="false" 
        class="dropdown-toggle">
        <i class="material-icons">account_circle</i>Dokter
        </a>
        <ul class="collapse list-unstyled menu" id="homeSubmenu2">
          @foreach ($polis as $poli)
            <li><a href="#">{{ $poli->name }}</a></li>  
          @endforeach
        </ul>
      </li> --}}
      
      @if ($data == 'Pasien')
          <?php $slug = 'pasien' ?>
      @elseif ($data == 'Pasien Rawat Inap')
          <?php $slug = 'pri' ?>
      @else
          <?php $slug = 'prj' ?>
      @endif

      <li class="">
      <a href="/dashboard/doctor" class=""><i class="material-icons">account_circle</i>Dokter </a>
      </li>

      <li class="">
        <a href="/dashboard/user" class=""><i class="material-icons">account_circle</i>User </a>
      </li>
      {{-- <li class="">
      <a href="#" class=""><i class="material-icons">date_range</i>Calendar </a>
      </li> --}}

      <li class="">
      <a href="/exportpasien/{{ $slug }}" class=""><i class="material-icons">library_books</i>Copy </a>
      </li>
    
    </ul>
  </div>
  
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


          <div class="main-content">
          <div class="row">
            <div class="col-md-12">
            <div class="table-wrapper">
              
              <div class="table-title">
                <div class="row">
                  <div class="col-sm-6 p-0 flex justify-content-lg-start justify-content-center">
                    <h2 class="ml-lg-2">{{ $data }}</h2>
                </div>
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
                </div>
              </div>
              
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
                  $data_tampil = 10;
                }
              ?>
              <div class="clearfix">
                <div class="hint-text">showing <b>{{ ($pageActive == $jml_hal) ? $jumlah_pasien%10 : $data_tampil }}</b> out of <b>{{ $jumlah_pasien }}</b></div>
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





  
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="{{ asset('import/js/jquery-3.3.1.slim.min.js') }}"></script>
  <script src="{{ asset('import/js/popper.min.js') }}"></script>
  <script src="{{ asset('import/js/bootstrap.min.js') }}"></script>
  <script src="{{ asset('import/js/jquery-3.3.1.min.js') }}"></script>
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

  <script>
    $(".editPatient").click(function() {
      let value = $(this).data("custom-value");
      console.log(value)
      // do other stuff.
    });
  </script>

  <script type="text/javascript">
    $('#selectAll').click(function(event) {   
    if(this.checked) {
        // Iterate each checkbox
        $(':checkbox').each(function() {
            this.checked = true;                        
        });
    } else {
        $(':checkbox').each(function() {
            this.checked = false;                       
        });
    }
}); 
  </script>

  <script type="text/javascript">
      $(document).ready(function(){
        $(".xp-menubar").on('click',function(){
        $("#sidebar").toggleClass('active');
      $("#content").toggleClass('active');
      });
      
      $('.xp-menubar,.body-overlay').on('click',function(){
        $("#sidebar,.body-overlay").toggleClass('show-nav');
      });
      
    });
  </script>
  
  
  


  </body>
  
  </html>


