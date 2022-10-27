<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
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

    <script>
      $(document).ready(function () {
        $('#speciality').change(function (e) { 
          let url = 'get-doctor'+$(this).val()
          $('#doctor').append('<option value="" >Pilih Dokter</option>');
          axios.get(url).then((response) => {
            $.each( response.data , function (index, value) {
              // element == this
            $('#doctor').append('<option value="'+value.id+'" >'+value.name+'</option>');
            });
          })
        });
      });
    </script>

<script>
  $(document).ready(function () {
  $('body').on('click', '#show-patient', function () {
    let show_url = $(this).data('url');
    console.log(show_url)
    $.get(show_url, function (data) {
      console.log(data)
      // $('#showModal').modal('show');
      if (data.type == 'outpatient') {
        $type = 'Pasien Rawat Jalan'
      } else if (data.type == 'inpatient') {
        $type = 'Pasien Rawat Inap'
      }

      if (data.jenis_kelamin == 1) {
        $jk = 'Pria'
      } else if (data.jenis_kelamin == 2) {
        $jk = 'Wanita'
      }
      
        $('#pasien-nama').val(data.name);
        $('#pasien-nik').val(data.NIK);
        $('#pasien-type').val($type);
        $('#pasien-alamat').val(data.alamat);
        $('#pasien-jk').val($jk);
        $('#pasien-phone').val(data.no_tlp);
    });
    });
  });
</script>

<script>
  $('body').on('click', '#delete-patient', function () {
    let url = $(this).attr('data-url');
    let id = $(this).val();
    // console.log(id)
    // console.log(url)
    $('#input-delete').val(id);
    // let valuemodal = $('#input-delete').val();
    // console.log(valuemodal)
  });

  $('body').on('click', '#delete-btn-patient', function () {
    console.log(this)
    let id = $('#input-delete').val()
    console.log(id)

    $.ajaxSetup({
      headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      }
    });

    $.ajax({
      type: 'POST',
      data: {
          _method: 'DELETE'
      },
      url: 'dashboard/pasien/'+id,
      dataType: "json",
      success: function (response) {
        console.log(response)
        $('#'+id+'').remove();
      }
    });
  });
</script>

{{-- <script>
  $('body').on('change', '.status', function () {
  let statusVal = $(this).val();
  let id = $(this).attr('data-id')

  $.ajaxSetup({
    headers: {
      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
  });

  $.ajax({
    type: "PUT",
    url: "/subevents/"+id,
    async: false,
    data: {status: statusVal},
    dataType: "json",
    success: function (response) {
      // console.log("data berhasil dikirim")
    }
  })
  .fail(function(error, textStatus, errorThrown) {
    console.log(JSON.stringify(error));
    alert(textStatus);
    alert(errorThrown);
  })
  .always(function() {
    console.log("selesai")
  });
});
</script> --}}

</body>
    
</html>