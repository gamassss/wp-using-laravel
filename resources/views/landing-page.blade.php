<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    {{-- Google Fonts --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@700&display=swap" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css2?family=Inter+Tight:wght@300&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">

    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100&display=swap" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css2?family=Abyssinica+SIL&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <title>Document</title>
</head>

<body>
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
                            <a class="nav-link active" aria-current="page" href="#carouselRs">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#doctor">Make an Appointment</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="#contact">Contact Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="/login"><i class="bi bi-person-fill me-2"></i>Login</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <div id="carouselRs" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                    aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="https://source.unsplash.com/1000x400?hospital-room" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Excellent Treatment</h5>
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nobis deleniti dolorum, voluptatum
                            qui quasi cupiditate.</p>
                        <p><a href="#" class="btn btn-warning mt-3">Make an appointment</a></p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="https://source.unsplash.com/1000x400?hospital" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Coordinated Care</h5>
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quia, ipsum.</p>
                        <p><a href="#" class="btn btn-warning mt-3">Make an appointment</a></p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="https://source.unsplash.com/1000x400?nurse" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Deliver compassionate care</h5>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis placeat blanditiis ab
                            corporis!</p>
                        <p><a href="#" class="btn btn-warning mt-3">Make an appointment</a></p>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>

    </div>

    <div class="container px-4 isi-land pt-5 mb-5 border-bottom border-2">
        <div class="row gx-5">
            <div class="col-md-4">
                <p class="head-quest pt-3">Why Choose Ayano Hospital?</p>
                <button type="button" class="btn btn-primary rounded-pill py-3 px-2">Learn More About Ayano
                    Hospital</button>
            </div>
            <div class="col-md-8">
                <div class="container overflow-hidden">
                    <div class="row gy-5">
                        <div class="col-6 border-top border-2 border-dark">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title fs-3 pt-5 text-center">More experience</h5>
                                    <p class="card-text text-center">The million patients we treat each year prepares
                                        us to treat the one who matters most — you.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 ms-auto border-top border-2 border-dark">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title fs-3 pt-5 text-center">The right answers</h5>
                                    <p class="card-text text-center">Count on our experts to deliver an accurate
                                        diagnosis and the right plan for you the first time.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 border-top border-2 pb-5 border-dark">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title fs-3 pt-5 text-center">You come first</h5>
                                    <p class="card-text text-center">Treatment at Ayano Hospital is a truly human
                                        experience. You're cared for as a person first.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 border-top border-2 pb-5 border-dark">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title fs-3 pt-5 text-center">Innovation with impact</h5>
                                    <p class="card-text text-center">All of our patient care, education and research
                                        are driven to make discoveries that can help heal you.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- <p class="header">AYANO HOSPITAL SURABAYA</p>
          <p class="excerpt">Salah satu rumah sakit terbaik di Surabaya / best hospital in Surabaya, dengan layanan kesehatan terlengkap & didukung oleh tenaga medis terbaik.</p>
          <span class="head-light">The Hospital of the Future, </span>
          <span class="header">Today.</span> --}}
            </div>
        </div>
    </div>

    {{-- Blog COVID --}}
    <div class="container cov-post">
        <div class="row py-3">
            <div class="col-md-6 border-end border-2 border-dark">
                <div class="card">
                    <img src="img/cov1.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title text-primary fs-4">Registration for COVID-19 Vaccine</h5>
                        <p class="card-text">The Ministry of Public Health has launched a new website registration
                            process that will allows citizens and residents to register their desire to receive the
                            COVID-19 vaccine. The new online registration form allows people who meet the requirements
                            for priority groups to request an appointment to receive the vaccine.</p>
                        <a href="#" class="btn btn-primary">Read more</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <img src="img/cov2.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title text-danger fs-4">Coronavirus Disease (COVID-​​19)</h5>
                        <p class="card-text">MOPH in collaboration with HMC and PHCC has created webpage to provide
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
    <div class="d-grid gap-2 col-2 my-4 mx-auto">
        <div class="btn btn-success rounded-pill px-2 py-2 justify-content-center">View more</div>
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

    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>

</body>

</html>
