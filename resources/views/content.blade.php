<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">

  {{-- CSS SLIDEBAR --}}
     <link rel="stylesheet" href="{{ asset('css/slide/bootstrap.min.css') }}">
     <link rel="stylesheet" href="{{ asset('css/slide/font-awesome.min.css') }}">
     <link rel="stylesheet" href="{{ asset('css/slide/animate.css') }}">
     <link rel="stylesheet" href="{{ asset('css/slide/owl.carousel.css') }}">
     <link rel="stylesheet" href="{{ asset('css/slide/owl.theme.default.min.css') }}">

     <!-- MAIN CSS -->
     <link rel="stylesheet" href="{{ asset('css/slide/tooplate-style.css')}}">
  <title>Content</title>
</head>
<body>
    @include('partials.navbar')

{{-- Slidebar Content --}}
<section id="home" class="slider" data-stellar-background-ratio="0.5">
  <div class="container">
       <div class="row">

                 <div class="owl-carousel owl-theme">
                      <div class="item item-first">
                           <div class="caption">
                                <div class="col-md-offset-1 col-md-10">
                                     <h3>Welcome to</h3>
                                     <h1>Dr. Ayano Hospital</h1>
                                     <a href="img/slider1.jpg" class="section-btn btn btn-default smoothScroll">Meet Our Doctors</a>
                                </div>
                           </div>
                      </div>

                      <div class="item item-second">
                           <div class="caption">
                                <div class="col-md-offset-1 col-md-10">
                                     <h3>Aenean luctus lobortis tellus</h3>
                                     <h1>New Lifestyle</h1>
                                     <a href="#about" class="section-btn btn btn-default btn-gray smoothScroll">More About Us</a>
                                </div>
                           </div>
                      </div>

                      <div class="item item-third">
                           <div class="caption">
                                <div class="col-md-offset-1 col-md-10">
                                     <h3>Pellentesque nec libero nisi</h3>
                                     <h1>Your Health Benefits</h1>
                                     <a href="#news" class="section-btn btn btn-default btn-blue smoothScroll">Read Stories</a>
                                </div>
                           </div>
                      </div>
                 </div>
                 
       </div>
  </div>
</section>

{{-- fasilitias --}}
<div class="container p-5 w-75" style="text-align: center; margin-left: auto; margin-right: auto;">
  <div class="py-3 border-top border-secondary border-2">
    <h1>Our Services</h1>
    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Neque at beatae labore autem iusto delectus.</p>
  </div>
  <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="{{ asset("img/imgcont.jpg") }}" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5>First slide label</h5>
          <p>Some representative placeholder content for the first slide.</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="{{ asset("img/imgcont.jpg") }}" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5>Second slide label</h5>
          <p>Some representative placeholder content for the second slide.</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="{{ asset("img/imgcont.jpg") }}" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5>Third slide label</h5>
          <p>Some representative placeholder content for the third slide.</p>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
</div>

{{-- card --}}
<div class="container p-3">
  <div class="py-3 border-top border-secondary border-2" style="text-align: center; margin-left: auto; margin-right: auto;">
    <h1>Our Facilities</h1>
    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Neque at beatae labore autem iusto delectus.</p>
  </div>
  <div class="row"  style="text-align: center; margin-left: auto; margin-right: auto;">
  
    <div class="col">
      <div class="card" style="display: flex; align-items:center;">
        <img src="img/kandungan.jpg" class="card-img-top my-5" alt="Cardiology Image" style="">
        <div class="card-body">
          <h5 class="card-title">Poli Kandungan</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <a href="#" class="btn btn-primary">Make Appointment</a>
        </div>
      </div>
    </div>
  
    <div class="col">
      <div class="card" style="display: flex; align-items:center;">
        <img src="img/mata.png" class="card-img-top" alt="Dentist Image" style="width: 258px">
        <div class="card-body">
          <h5 class="card-title">Poli Mata</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <a href="#" class="btn btn-primary">Make Appointment</a>
        </div>
      </div>
    </div>
  
    <div class="col">
      <div class="card" style="display: flex; align-items:center;">
        <img src="img/bedahumum.jpg" class="card-img-top" alt="..." style="width: 350px;">
        <div class="card-body">
          <h5 class="card-title">Poli Bedah Umum</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <a href="#" class="btn btn-primary">Make Appointment</a>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="container p-3">
  <div class="row"  style="text-align: center; margin-left: auto; margin-right: auto;">
  
    <div class="col">
      <div class="card">
        <img src="img/saraf.jpg" class="card-img-top mt-5" alt="..." style="width: 350px;">
        <div class="card-body">
          <h5 class="card-title">Saraf</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <a href="#" class="btn btn-primary">Make Appointment</a>
        </div>
      </div>
    </div>
  
    <div class="col">
      <div class="card">
        <img src="img/tht.jpg" class="card-img-top" alt="..." style="width: 339px">
        <div class="card-body">
          <h5 class="card-title">Poli THT</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <a href="#" class="btn btn-primary">Make Appointment</a>
        </div>
      </div>
    </div>
  
    <div class="col">
      <div class="card">
        <img src="img/paru.jpg" class="card-img-top" alt="..." style="width: 359px">
        <div class="card-body">
          <h5 class="card-title">Poli Paru</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <a href="#" class="btn btn-primary">Make Appointment</a>
        </div>
      </div>
    </div>
  
  </div>
</div>

<div class="container p-3">
  
  <div class="row"  style="text-align: center; margin-left: auto; margin-right: auto;">
  
    <div class="col">
      <div class="card">
        <img src="img/penyakitdalam.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Poli Penyakit Dalam</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <a href="#" class="btn btn-primary">Make Appointment</a>
        </div>
      </div>
    </div>
  
    <div class="col">
      <div class="card">
        <img src="img/jantung.jpg" class="card-img-top" alt="..." style="width: 575px">
        <div class="card-body">
          <h5 class="card-title">Poli Jantung</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <a href="#" class="btn btn-primary">Make Appointment</a>
        </div>
      </div>
    </div>
  </div>
</div>

{{-- next --}}


  {{-- <div class="container mt-5">
  
    <div class="row mt-5">
      <div class="col-md-4 mt-5">
        <img src="{{ asset("img/imgcont.jpg") }}" height="700px" alt="">
      </div>
      <div class="col-md-5 mt-5">
        <h1>About Ayano Hospital</h1>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque assumenda enim voluptate! Commodi dolores, aliquid omnis fuga perspiciatis rem fugit quod! Et, provident velit eum repellat dicta ex accusantium exercitationem aut, quos, assumenda voluptas doloremque possimus expedita aspernatur atque non quam! Esse asperiores ex dolorum nulla quas consectetur beatae ad.</p>
      </div>
    </div>
   
  </div> --}}
  <script src="{{asset('js/bootstrap.min.js')}}"></script>

  {{-- JS SLIDEBAR --}}
       <!-- SCRIPTS -->
       <script src="{{asset('js/slidejs/jquery.js')}}"></script>
       <script src="{{asset('js/slidejs/bootstrap.min.js')}}"></script>
       <script src="{{asset('js/slidejs/jquery.sticky.js')}}"></script>
       <script src="{{asset('js/slidejs/jquery.stellar.min.js')}}"></script>
       <script src="{{asset('js/slidejs/wow.min.js')}}"></script>
       <script src="{{asset('js/slidejs/smoothscroll.js')}}"></script>
       <script src="{{asset('js/slidejs/owl.carousel.min.js')}}"></script>
       <script src="{{asset('js/slidejs/custom.js')}}"></script>
</body>
</html>