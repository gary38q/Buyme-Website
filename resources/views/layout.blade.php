<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <link rel="icon" type="image/x-icon" href="{{ asset('public/product/image/favicon.jpg') }}">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    @section('css')
    @show
    <style>
      @media (min-width: 900px) {
        /* .navku { font-size: 20px   } */
      }
    </style>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    
    {{-- Font Style --}}
    <link href='https://fonts.googleapis.com/css?family=League Spartan' rel='stylesheet'>

    {{-- Font Awesome --}}
    <script src="https://kit.fontawesome.com/19efc8c9d6.js" crossorigin="anonymous"></script>

    <title>BuyMe</title>
  </head>
  <body class="d-flex flex-column min-vh-100" style="font-family: League Spartan">
    <div class="container">
      <center>
      <a href="{{ url('/Home') }}"><img class="img-fluid" width="250px" src="{{ asset('public/product/image/logobuyme.png') }}"></a>
      </center>
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="mr-auto ml-auto ">
          <div class="navbar-nav d-flex flex-row" id="mynav">
            @section('navbar')
            @show
          </div>
        </div>
      </nav>
    </div>
      <hr class="w-100" style="background-color: #f68d6f;height:5px;">
      {{-- Content --}}
      <div class="container">
            @section('isi')
            @show
      </div>
      {{-- End Content --}}
      <footer class="mt-auto" >
        <hr>
        <div class="container">
          <div class="row">
            <div class="col">
              {{-- Instagram --}}
              <div>
              <i class="fa-brands fa-instagram"></i>
              </div>
              {{-- Whatsapp --}}
              <div>
              <i class="fa-brands fa-whatsapp"></i>
              </div>
            </div>

            <div class="col">

            </div>

            <div class="col">
              <input type="text">
            </div>

          </div>
        </div>
      </footer>

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>


    <script>
      var btnContainer = document.getElementById("mynav");

      // Get all buttons with class="btn" inside the container
      var btns = btnContainer.getElementsByClassName("nav-btn");

      // Loop through the buttons and add the active class to the current/clicked button
      for (var i = 0; i < btns.length; i++) {
        btns[i].addEventListener("click", function() {
          var current = document.getElementsByClassName("active");
          current[0].className = current[0].className.replace(" active", "");
          this.className += " active";
        });
      }

      $('#myIndicator').carousel({
        interval: 5000,
        cycle: true
      }); 
    </script>

    @section('script')
    @show
  </body>
</html>