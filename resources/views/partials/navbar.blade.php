<div class="container-fluid">
    <nav class="navbar navbar-expand-lg navbar-light bg-light shadow bg-body rounded fixed-top mb-3">
        <div class="container">
            <a class="navbar-brand fs-3" href="/"><span class="text-warning">RS</span><span class="text-primary">
                    Dr. Ayano</span></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" style="position: relative;" aria-current="page"
                            href="{{ Request::is('/') ? '#home' : '/' }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{ Request::is('/') ? '/find-doctor' : '/#doctor' }}">Make an Appointment</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="{{ Request::is('/') ? '#contact' : '/#contact' }}">Contact Us</a>
                    </li>
                    @if (Auth::check())
                        
                        @if (Auth::user()->type == 'admin')
                            @php
                                $href = '/dashboard';
                            @endphp
                        @elseif (Auth::user()->type == 'doctor')
                            @php
                                $href = 'doctor/prj';
                            @endphp
                        @elseif (Auth::user()->type == 'staff')
                            @php
                                $href = 'staff/dashboard';
                            @endphp
                        @endif

                    @else
                        @php 
                            $href = '/login';
                        @endphp
                    @endif
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{ $href }}"><i
                                class="bi bi-person-fill me-2"></i>Login</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</div>
