<?php
    session_start();

    if(isset($_SESSION['useremail']) && !empty($_SESSION['useremail'])){
        ?>
    <!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
  <title>Welcome </title>
</head>
<body>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <!--Nav Bar-->
   
  <nav class="navbar navbar-expand-lg navbar-light bg-primary">
    <nav class="navbar navbar-light bg-primary">
  <!--<div class="container">
    <a class="navbar-brand" href="#">
      <img src="img\logo.jpg" alt="" width="30" height="24">
    </a>
  </div> -->
</nav>
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Asclepious</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>  
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          
          <li class="nav-item">
            <a class="nav-link active" href="loginpage.php">    </a>
          </li>

          <li class="nav-item">
            <a class="nav-link active" href="loginpage.php">   </a>
          </li>
          
          <li class="nav-item">
            <a class="nav-link active" href="loginpage.php">   </a>
          </li>
          <li class="nav-item">
            <a class="nav-link-primary" href="loginpage.php">    </a>
          </li>

          <li class="nav-item">
            <a class="nav-link active" href="uploadtheprescription.php">Upload</a>
          </li>

          <li class="nav-item">
            <a class="nav-link active" href="viewmedicine.php">Buy</a>
          </li>

          <li class="nav-item">
            <a class="nav-link active" href="viewcomponents.php">Rent</a>
          </li>

          <li class="nav-item">
            <a class="nav-link active" href="loginpage.php">About Us</a>
          </li> 
        </ul> 
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            <i class="bi bi-menu-button-wide-fill"></i>
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="viewpersonaldetails.php">My Profile</a></li> 
              <li><a class="dropdown-item" href="viewprescription.php">View prescription</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="logoutprocess.php">Log Out</a></li>
            </ul>
          </li> 
        </ul>
      </div>
    </div>
  </nav>

  <!--CAROUSEL-->
  <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <!--<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button> -->
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="img\1.jpg" height="300px;" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="img\GettyImages-1132060733-1536x1024.jpg" height="200px;" class="d-block w-100" alt="...">
      </div>
     <!-- <div class="carousel-item">
        <img src="img\7.jfif" height="200px" class="d-block w-100" alt="..."> -->
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
  <Style>
    .carousel .carousel-item {
     height: 500px;
    }
    .carousel-item img {
    position: absolute;
    object-fit:cover;
    top: 0;
    left: 0;
    min-height: 500px;
    }
  </Style>
  <!--CARD-->
  <section class="bg-light mt-5">
    <div class="container-lg">

      <div class="row my-5 g-5 align-items-center justify-content-center">
        <div class="col-8 col-lg-4 col-xl-3">
          <div class="card border-3">
            <div class="card-body text-center py-4">
              <h4 class="card-title">Upload Prescription</h4>
              <p class="lead card-subtitle">Upload your Prescription with proper information</p>
              <a href="uploadtheprescription.php" class="btn btn-outline-primary btn-lg mt-3"> Upload</a>
            </div>
          </div>
        </div>

        <div class="col-8 col-lg-4 col-xl-3">
          <div class="card border-3">
            <div class="card-body text-center py-4">
              <h4 class="card-title">Buy <br> Medicine</h4>
              <p class="lead card-subtitle">Buy Authentic <br> Medicine at cheaper price </p>
              <a href="viewmedicine.php" class="btn btn-outline-primary btn-lg mt-3"> Buy</a>
            </div>
          </div>
        </div>

        <div class="col-8 col-lg-4 col-xl-3">
          <div class="card border-3">
            <div class="card-body text-center py-4">
              <h4 class="card-title">Rent Medical Components</h4>
              <p class="lead card-subtitle">Rent Medical Components at cheaper price</p>
              <a href="viewcomponents.php" class="btn btn-outline-primary btn-lg mt-3"> Rent</a>
            </div>
          </div>
        </div>
		
      </div>
   </section>

   <!--Start of Tawk.to Script-->
      <script type="text/javascript">
      var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
      (function(){
      var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
      s1.async=true;
      s1.src='https://embed.tawk.to/61ed9a5eb9e4e21181bb71fd/1fq4261bo';
      s1.charset='UTF-8';
      s1.setAttribute('crossorigin','*');
      s0.parentNode.insertBefore(s1,s0);
      })();
      </script>
      <!--End of Tawk.to Script-->

  <!--FOOTER-->
  <footer class="bg-primary text-center text-lg-start">
    <!-- Grid container -->
    <div class="container p-4">
      <!--Grid row-->
      <div class="row">
        <!--Grid column-->
        <div class="col-lg-6 col-md-12 mb-4 mb-md-0">
          <h3>Team Asclepius</h3>
            <p>
              Room#530(5th Floor)<br>
			        United International University<br>
					    United City, Madani Avenue, Badda, Dhaka<br>	
							Dhaka-1212<br>
						  Bangladesh<br>
              <strong>Phone:</strong> +880 01768685343<br>
              <strong>Email:</strong> teamasclepius@gmail.com<br>
            </p>
        </div>
        <!--Grid column-->
    </div>
    <!--Grid row-->
  </div>
  <!-- Copyright -->
  <div class="text-center p-3 bg-primary" >
    © 2022 Copyright:
    <a class="text-dark" href="#">Team Asclepius</a>
  </div>
  <!-- Copyright -->
</footer>

  
</body>
</html>    
<?php
    }
    else{
      
        ?>
            <script>
                window.location.assign('loginpage.php');
            </script>
        <?php
    }
?>