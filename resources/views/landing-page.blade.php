@extends('layouts.main')
    
@section('container')
    @if (session('success'))
        <div class="alert alert-success" role="alert">
            {{ session('success') }}
        </div>
    @endif

    <div class="banner" id="home">
        <img src="img/docpic.ashx" style="max-width: 100%; aspect-ratio: 2;" class="px-1 position-relative" alt="">
        <h1 class="col-md-6 px-5 position-absolute top-50 text-white" style="font-size: 4em; font-family: 'Abyssinica SIL', serif;">When you need answers, you know where to go<br><p class="fs-3 pt-3">The No.1 hospital in the nation, for you.</p></h1>
    </div>

    <div class="container px-5 mt-5 mb-5 border-bottom border-dark border-1">
        <div class="row gx-5">
            <div class="col-md-4">
                <p class="head-quest pt-3">Why Choose Ayano Hospital?</p>
                <button type="button" class="btn btn-primary rounded-pill py-2 px-3"><a href="/content"
                        class="text-white" style="text-decoration: none;">Learn More About Ayano
                        Hospital</a></button>
            </div>
            <div class="col-md-4">
                <div class="p-0 border-top border-dark border-2">
                    <div class="card border-none">
                        <div class="card-body p-0">
                            <h5 class="card-title">More experience</h5>
                            <p class="card-text">The million patients we treat each year prepares us to treat the one
                                who matters most — you.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="p-0 border-top border-dark border-2">
                    <div class="card border-none">
                        <div class="card-body p-0">
                            <h5 class="card-title">The right answers</h5>
                            <p class="card-text">Count on our experts to deliver an accurate diagnosis and the right
                                plan for you the first time.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4 p-3">
            </div>

            <div class="col-md-4">
                <div class="p-0 border-top border-dark border-2">
                    <div class="card border-none">
                        <div class="card-body p-0">
                            <h5 class="card-title">You come first</h5>
                            <p class="card-text">Treatment at Mayo Clinic is a truly human experience. You're cared for
                                as a person first.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="p-0 border-top border-dark border-2">
                    <div class="card border-none">
                        <div class="card-body p-0">
                            <h5 class="card-title">Innovation with impact</h5>
                            <p class="card-text">All of our patient care, education and research are driven to make
                                discoveries that can help heal you.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Blog COVID --}}
    <div class="container cov-post">
        <div class="row py-3">
            <div class="col-md-6 border-end border-1 pe-3 mt-3 border-dark">
                <div class="card blog-none">
                    <img src="img/cov1.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title text-primary fs-4">Registration for COVID-19 Vaccine</h5>
                        <p class="card-text pb-2">The Ministry of Public Health has launched a new website registration
                            process that will allows citizens and residents to register their desire to receive the
                            COVID-19 vaccine. The new online registration form allows people who meet the requirements
                            for priority groups to request an appointment to receive the vaccine.</p>
                        <a href="#" class="btn btn-primary">Read more</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 ps-3 mt-3">
                <div class="card blog-none">
                    <img src="img/cov2.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title text-danger fs-4">Coronavirus Disease (COVID-​​19)</h5>
                        <p class="card-text pb-5">MOPH in collaboration with HMC and PHCC has created webpage to provide
                            residents of Qatar with a trusted source of information related to the Novel Coronavirus
                            2019.</p>
                        <a href="#" class="btn btn-primary">Read more</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section id="doctor" class="doctor">
        <div class="container text-center">
            <h1 class="pt-5 mb-5">Our Doctors</h1>
            <div class="row">
                <div class="d-grid gap-2 col-2 mb-3 ms-auto">
                    <div class="btn btn-success rounded-pill px-0 py-2 justify-content-center">View more </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3">
                    <div class="card">
                        <div class="card-header">
                            <p class="fw-bold fs-5">Kayla Farida <br><small>Sp.Og, Msc</small></p>
                            <img src="img/doc5.png" style="border-radius: 50%; width:130px; height: 130px;"
                                class="img-fluid" alt="">
                            <p class="pt-3">Jadwal : Senin, Selasa, Rabu</p>
                            <button type="button" class="btn btn-success rounded-pill px-3 py-2 mb-3">Book
                                now</button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="card">
                        <div class="card-header">
                            <p class="fw-bold fs-5">Tugiman Sihotang <br><small>Sp.Og(K)-KFM</small></p>
                            <img src="img/doc3.png" style="border-radius: 50%; width:130px; height: 130px;"
                                class="img-fluid" alt="">
                            <p class="pt-3">Jadwal : Senin, Selasa, Rabu</p>
                            <button type="button" class="btn btn-success rounded-pill px-3 py-2 mb-3">Book
                                now</button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="card">
                        <div class="card-header">
                            <p class="fw-bold fs-5">Jabal Adriansyah <br><small>Sp.Og(K)Onk</small></p>
                            <img src="img/doc1.png" style="border-radius: 50%; width:130px; height: 130px;"
                                class="img-fluid" alt="">
                            <p class="pt-3">Jadwal : Senin, Selasa, Rabu</p>
                            <button type="button" class="btn btn-success rounded-pill px-3 py-2 mb-3">Book
                                now</button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="card">
                        <div class="card-header">
                            <p class="fw-bold fs-5">Unjani Palastri <br><small>Sp.Og(K)-KFM</small></p>
                            <img src="img/doc2.png" style="border-radius: 50%; width:130px; height: 130px;"
                                class="img-fluid" alt="">
                            <p class="pt-3">Jadwal : Senin, Selasa, Rabu</p>
                            <button type="button" class="btn btn-success rounded-pill px-3 py-2 mb-3">Book
                                now</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="row">
        <div class="d-grid gap-2 col-2 my-4 mx-auto">
            <div class="btn btn-success rounded-pill px-2 py-2 justify-content-center"><a href="/find-doctor" class="text-decoration-none text-white">Book an appointment</a></div>
        </div>
    </div>

    <footer id="contact" class="bg-dark text-white pt-5 pb-4 mt-5">

        <div class="container text-center text-md-start">

            <div class="row text-center text-md-start">

                <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
                    <h5 class="text-uppercase mb-4 font-weight-bold text-warning">Rumah Sakit Dr. Ayano</h5>
                    <p>
                        <a href="#" class="text-white" style="text-decoration: none">Make an appointment</a>
                    </p>
                    <p class="mb-5">
                        <a href="#" class="text-white" style="text-decoration: none">Find Department</a>
                    </p>
                    <h5 class="text-uppercase mb-4 font-weight-bold text-warning">For Students</h5>
                    <p>
                        <a href="#" class="text-white" style="text-decoration: none">View degree programs</a>
                    </p>
                    <p>
                        <a href="#" class="text-white" style="text-decoration: none">Log in to student
                            portal</a>
                    </p>
                </div>

                <div class="col-md-2 col-lg-2 col-lg-2 mx-auto mt-3">
                    <h5 class="text-uppercase mb-4 font-weight-bold text-warning">For Researcher</h5>
                    <p>
                        <a href="#" class="text-white" style="text-decoration: none">Find an expert</a>
                    </p>
                    <p>
                        <a href="#" class="text-white" style="text-decoration: none">View Ayano Hospital</a>
                    </p>
                </div>

                <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mt-3">
                    <h5 class="text-uppercase mb-4 font-weight-bold text-warning">For International Patients</h5>
                    <p>
                        <a href="#" class="text-white" style="text-decoration: none">Request an appointment</a>
                    </p>
                    <p>
                        <a href="#" class="text-white" style="text-decoration: none">Financial services</a>
                    </p>
                </div>

                <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mt-3">
                    <h5 class="text-uppercase mb-4 font-weight-bold text-warning">Contact</h5>
                    <p>
                        <i class="fas fa-home me-3"></i> Universitas Airlangga
                    </p>
                    <p>
                        <i class="fas fa-envelope me-3"></i> rsayano@vokasi.unair.ac.id
                    </p>
                    <p>
                        <i class="fas fa-phone me-3"></i> +62 861 2871 7632
                    </p>
                    <p>
                        <i class="fas fa-print me-3"></i> 031 99005114
                    </p>
                </div>

            </div>

            <hr class="mb-4">

            <div class="row align-items-center">

                <div class="col-md-7 col-lg-8"></div>

                <div class="col-md-5 col-lg-4">
                    <div class="text-center text-md-right">
                        <ul class="list-unstyled list-inline">
                            <li class="list-inline-item">
                                <a href="#" class="btn-floating btn-sm text-white" style="font-size: 23px;"><i
                                        class="fab fa-facebook"></i></a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#" class="btn-floating btn-sm text-white" style="font-size: 23px;"><i
                                        class="fab fa-twitter"></i></a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#" class="btn-floating btn-sm text-white" style="font-size: 23px;"><i
                                        class="fab fa-google-plus"></i></a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#" class="btn-floating btn-sm text-white" style="font-size: 23px;"><i
                                        class="fab fa-linkedin-in"></i></a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#" class="btn-floating btn-sm text-white" style="font-size: 23px;"><i
                                        class="fab fa-youtube"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>

            </div>

        </div>

    </footer>

@endsection
