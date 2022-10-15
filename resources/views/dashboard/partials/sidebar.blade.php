@if(Auth::user()->type === 'admin')

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
    <a href="/dashboard/user" class=""><i class="material-icons">person</i>User </a>
  </li>
  

</ul>
</div>

@elseif(Auth::user()->type === 'doctor')

<div id="sidebar">
  <div class="sidebar-header">
  <h3><img src="{{ asset('img/rs-logo.svg') }}" style="height: 40px;"class="img-fluid"/><span>RS Dr. Ayano</span></h3>
</div>
<ul class="list-unstyled component m-0">
  
  <li class="{{ (Request::is('doctor/dashboard')) ? 'active' : '' }}">
    <a href="/doctor/prj" class=""><i class="material-icons">personal_injury</i>Pasien </a>
  </li>

  <li class="{{ (Request::is('doctor/appointment')) ? 'active' : '' }}">
    <a href="/doctor/appointment" class=""><i class="material-icons">calendar_month</i>Appointment </a>
  </li>

  <li class="{{ (Request::is('doctor/resep')) ? 'active' : '' }}">
    <a href="/doctor/resep" class=""><i class="material-icons">receipt_long</i>Resep </a>
  </li>

</ul>
</div>

@else

@endif