<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
{{app()->setLocale('hi')}}

  <title>KBFMS</title>

  <title>Laravel {{app()->getLocale()}}</title>


  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
  <link href="/css/app.css" rel="stylesheet" type="text/css">



</head>


<body class="skin-blue layout-top-nav">



<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#"><img src="/image/logo.png" alt="krishi bodh logo" class="img-fluid"
     style="height: 60px;width: 60px;"><b>KRISHI BODH</b></a>
     <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="#">Home<span class="sr-only">(current)</span></a>
        </li>
        
        <li class="nav-item">
          <a class="nav-link" href="https://dbtagriculture.bihar.gov.in/RegFarmer/" target="_blank">Register to DBT</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Govt. Schemes
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="https://pmkisan.gov.in/" target="_blank">PM Kisan</a>
            <a class="dropdown-item" href="#" target="_blank">KCC</a>
            <a class="dropdown-item" href="https://www.soilhealth.dac.gov.in/" target="_blank">Soil Health Card</a>
            <a class="dropdown-item" href="https://pmfby.gov.in/" target="_blank">PMFBY</a>
            <a class="dropdown-item" href="https://pmksy.gov.in/" target="_blank">PMKSY</a>
            <a class="dropdown-item" href="https://rkvy.nic.in/" target="_blank">RKVY</a>
            <a class="dropdown-item" href="https://www.enam.gov.in/web/" target="_blank">eNAM</a>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Media</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Success Stories</a>
        </li>
        
        <li class="nav-item">
          <a class="nav-link" href="#">Contact Us</a>
        </li>
      </ul>
      <ul class="navbar-nav">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          @if(Lang::locale()=='en')
            English
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="#">हिन्दी</a>
          </div>
          @endif

          @if(Lang::locale()=='hi')
          हिन्दी
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="#">English</a>
            </div>
          @endif
          </a>
          
            <!-- <a class="dropdown-item" href="#">English</a> -->

        </li>
        <li class="nav-item dropdown">
          <!-- <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Sign Up
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="#">Farmer</a>
            <a class="dropdown-item" href="#">Buyer</a> -->

            <a class="nav-link" href="{{route('register')}}">Register</a>
          <!-- </div> -->
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link" href="{{route('login')}}">Log In</a>
        </li>
      </ul>
    </div>
  </nav>


  <!-- Carousel -->

  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img class="d-block w-100" src="/image/farmer.jpg" alt="First slide">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="/image/farmer1.jpg" alt="Second slide">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="/image/farmer2.jpg" alt="Third slide">
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
  <script src="/js/app.js"></script>
</body>

</html>
