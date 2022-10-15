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


          <div class="main-content">
            
            <div class="row">
              <div class="col-md-12">
                <div class="table-wrapper">
                  <div class="table-title">
                    <div class="row">
                      <div class="col-sm-6 p-0 flex justify-content-lg-start justify-content-center">
                        <h2 class="ml-lg-2">Edit Data Pasien</h2>
                    </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-md-12">
                <form action="/dashboard/pasien/{{ $patient->id }}" method="post">
                  @method('put')
                  @csrf
                  <div class="form-group">
                    <label for="name">Name</label>
                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name', $patient->name) }}" required autofocus>
                    @error('name')
                      <div class="invalid-feedback">
                        {{ $message }}
                      </div>
                    @enderror
                  </div>
                  <div class="form-group">
                    <label for="nik">NIK</label>
                    <input id="nik" type="text" class="form-control @error('nik') is-invalid @enderror" name="NIK" value="{{ old('NIK', $patient->NIK) }}" required>
                    @error('NIK')
                      <div class="invalid-feedback">
                        {{ $message }}
                      </div>
                    @enderror
                  </div>
                  @if ($patient->type === "App\Models\Inpatient")
                    <div class="my-3">
                      <label for="pasien">Pasien</label><br>
                      <select id="pasien" class="form-select" aria-label="Default select example" name="type">
                          <option value="inpatient" selected>Pasien Rawat Inap</option>
                          <option value="outpatient">Pasien Rawat Jalan</option>
                      </select>
                      @error('type')
                      <div class="invalid-feedback">
                          {{ $message }}
                      </div>
                      @enderror
                    </div>
                  @else
                    <div class="my-3">
                      <label for="pasien">Pasien</label><br>
                      <select id="pasien" class="form-select" aria-label="Default select example" name="type">
                          <option value="App\Models\Inpatient">Pasien Rawat Inap</option>
                          <option value="App\Models\Outpatient" selected>Pasien Rawat Jalan</option>
                      </select>
                      @error('type')
                      <div class="invalid-feedback">
                          {{ $message }}
                      </div>
                      @enderror
                    </div>
                  @endif
                  <div class="form-group">
                    <label for="alamat">Address</label>
                    <input id="alamat" class="form-control @error('alamat') is-invalid @enderror" name="alamat" value="{{ old('alamat', $patient->alamat) }}" required></input>
                    @error('alamat')
                      <div class="invalid-feedback">
                        {{ $message }}
                      </div>
                    @enderror
                  </div>
                  @if ($patient->jenis_kelamin == 1)
                    <label>Jenis Kelamin</label><br>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="jenis_kelamin" id="pria" value=1 checked>
                      <label class="form-check-label" for="pria">Pria</label>
                    </div>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="jenis_kelamin" id="wanita" value=2>
                      <label class="form-check-label" for="wanita">Wanita</label>
                    </div>
                  @else
                    <label>Jenis Kelamin</label><br>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="jenis_kelamin" id="pria" value=1>
                      <label class="form-check-label" for="pria">Pria</label>
                    </div>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="jenis_kelamin" id="wanita" value=2 checked>
                      <label class="form-check-label" for="wanita">Wanita</label>
                    </div>
                  @endif
                  @error('jenis_kelamin')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                    <div class="form-group">
                      <label for="phone">Phone</label>
                      <input id="phone" type="text" class="form-control @error('no_tlp') is-invalid @enderror" name="no_tlp" value="{{ old('no_tlp', $patient->no_tlp) }}" required>
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
                    <button type="submit" class="btn btn-success" name="edit-btn">Save</button>
                  </div>
                </form>
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