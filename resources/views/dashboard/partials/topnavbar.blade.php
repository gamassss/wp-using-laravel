@if(Auth::user()->type === 'admin')
<div class="top-navbar">
  <div class="xd-topbar">
    <div class="row">
      <div class="col-2 col-md-1 col-lg-1 order-2 order-md-1 align-self-center">
        <div class="xp-menubar">
          <span class="material-icons text-white">signal_cellular_alt</span>
      </div>  
    </div>
    
    @if (Request::is('dashboard/pasien') || Request::is('dashboard/pri') || Request::is('dashboard/prj'))
      <div class="col-md-5 col-lg-3 order-3 order-md-2">
        <div class="xp-searchbar">
          <form action="/dashboard/pasien" method="get">
            @csrf
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
    @elseif(Request::is('dashboard/doctor'))
      <div class="col-md-5 col-lg-3 order-3 order-md-2">
        <div class="xp-searchbar">
          <form action="/dashboard/doctor" method="get">
            @csrf
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
    @else
      <div class="col-md-5 col-lg-3 order-3 order-md-2">
        <div class="xp-searchbar">
          <form action="/dashboard/user" method="get">
            @csrf
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
    @endif
    
    
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
              <a href="/dashboard/admin/{{ Auth::user()->id }}/edit" style="font-size: 15px; padding-left: 0; margin-left:-5px" class="px-0">
                <i class="bi bi-person-lines-fill" style="margin-right: 5px"></i>Edit Profile
              </a>
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
@elseif(Auth::user()->type === 'doctor')

<div class="top-navbar">
  <div class="xd-topbar">
    <div class="row">
      <div class="col-2 col-md-1 col-lg-1 order-2 order-md-1 align-self-center">
        <div class="xp-menubar">
          <span class="material-icons text-white">signal_cellular_alt</span>
      </div>  
    </div>
    
    @if (Request::is('dashboard/pasien') || Request::is('dashboard/pri') || Request::is('dashboard/prj'))
      <div class="col-md-5 col-lg-3 order-3 order-md-2">
        <div class="xp-searchbar">
          <form action="/dashboard/pasien" method="get">
            @csrf
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
    @elseif(Request::is('dashboard/doctor'))
      <div class="col-md-5 col-lg-3 order-3 order-md-2">
        <div class="xp-searchbar">
          <form action="/dashboard/doctor" method="get">
            @csrf
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
    @else
      <div class="col-md-5 col-lg-3 order-3 order-md-2">
        <div class="xp-searchbar">
          <form action="/dashboard/user" method="get">
            @csrf
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
    @endif
    
    
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
              <a href="/doctor/doctor/{{ Auth::user()->id }}/edit" style="font-size: 15px; padding-left: 0; margin-left:-5px" class="px-0">
                <i class="bi bi-person-lines-fill" style="margin-right: 5px"></i>Edit Profile
              </a>
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

@else



@endif