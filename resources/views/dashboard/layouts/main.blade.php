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

    @yield('content')
  
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