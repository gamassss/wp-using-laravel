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
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Abyssinica+SIL&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
  <title>{{ $title }}</title>
</head>
<body style="padding-top: 70; background-image: url(img/pic-appointment.png); background-position: right center">
  @include('partials.navbar')

  <div class="container" style="padding-top: 100px">

    <div class="row mb-5" id="app-h1" style="font-family: 'Open Sans', sans-serif; line-height: 1.5">
      <div class="col-md-6">
        <h1>BOOK AN APPOINTMENT AT</h1>
        <h1 style="font-weight: 900">DR. AYANO HOSPITAL</h1>
      </div>
    </div>

    <form action="">
      <div class="row">
        <div class="col-md-12">

          <div class="col-md-5 mb-3">
            <select name="cars" id="cars" class="px-4 py-2 " style="width: 100%">
              <option value="volvo">Choose Speciality</option>
              <option value="saab">Saab</option>
              <option value="mercedes">Mercedes</option>
              <option value="audi">Audi</option>
            </select>
          </div>

          <div class="col-md-5 mb-3">
            <select name="cars" id="cars" class="px-4 py-2 " style="width: 100%">
              <option value="volvo">Choose Doctor</option>
              <option value="saab">Saab</option>
              <option value="mercedes">Mercedes</option>
              <option value="audi">Audi</option>
            </select>
          </div>

          <div class="col-md-5 mb-3">
            <input type="text" data-toggle="datepicker" class="px-4 py-2" style="width:100%" placeholder="Choose Date">
          </div>

          <div class="col-md-5 mb-3">
            <select name="cars" id="cars" class="px-4 py-2 " style="width: 100%">
              <option value="volvo">Choose Time</option>
              <option value="saab">Saab</option>
              <option value="mercedes">Mercedes</option>
              <option value="audi">Audi</option>
            </select>
          </div>

        </div>
      </div>

      <button type="button" class="btn btn-success px-4 py-2">Book</button>

    </form>

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
</body>
</html>