<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
  <title>Welcome </title>
</head>

<script>  
	var check = function() 
  {
  if (document.getElementById('password').value ==
    document.getElementById('confirm_password').value)
    {
    document.getElementById('message').style.color = 'green';
    document.getElementById('message').innerHTML = 'matching';
    } 
    else 
    {
    document.getElementById('message').style.color = 'red';
    document.getElementById('message').innerHTML = 'not matching';
    }
  }
</script>

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
            <a class="nav-link active" href="loginpage.php">Upload</a>
          </li>

          <li class="nav-item">
            <a class="nav-link active" href="loginpage.php">Buy</a>
          </li>

          <li class="nav-item">
            <a class="nav-link active" href="loginpage.php">Rent</a>
          </li>

          <li class="nav-item">
            <a class="nav-link active" href="loginpage.php">About Us</a>
          </li>
          
          <!--- DROP DOWN MENU
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Dropdown
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="#">Action</a></li>
              <li><a class="dropdown-item" href="#">Another action</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="#">Something else here</a></li>
            </ul>
          </li> -->
        </ul>
        
      
        <!-- SEARCH BAR
        <form class="d-flex">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form> -->
      </div>
      <a href="signup.php" class="btn btn-outline-primary"> Sign Up</a>
    </div>
  </nav>

     
  <!--CARD-->
  <div class="container-lg">
    <div class="row justify-content-center my-5">
      <div class="col-lg-6">
        
        <form action="Registration.php" method="post" enctype="multipart/form-data" class="was-validated">
          
          <div class="mb-3">
            <label for="FLname" class="form-label">Name</label>
            <input type="text" class="form-control is-invalid" id="FLname" required placeholder="Enter your Name" name="uname" required></input>
            <div class="invalid-feedback">
              Please enter the field.
            </div>
          </div>

          <div class="mb-3">
            <label for="staticEmail" class="form-label">Email Address</label>
            <input type="email" class="form-control is-invalid" id="staticEmail" required placeholder="name@example.com" name="uemail" required></input>
            <div class="invalid-feedback">
              Please enter the field.
            </div>
          </div>

          <div class="mb-3">
            <label for="phone" class="form-label">Phone Number</label>
            <input type="tel" class="form-control is-invalid" id="phone" required placeholder="Enter your Phone Number" name="utel"  required></input>
            <div class="invalid-feedback">
              Please enter the field.
            </div>
          </div>

          <div class="mb-3">
          <label for="validationTextarea" class="form-label">Address </label>
          <textarea class="form-control is-invalid" id="validationTextarea"  required placeholder="Enter your address" name="uadd" required></textarea>
          <div class="invalid-feedback">
            Please enter the field.
          </div>
        </div>

          <div class="mb-3">
          <label for="password" class="form-label">Enter Password</label>
            <input type="password" class="form-control is-invalid" name="upass" id="password" onkeyup='check();' required></input>
            <div class="invalid-feedback">
                Please enter the field.
              </div>
          </div>

          <div class="mb-3">
            <label for="confirm_password" class="form-label">Confirm Password</label>
              <input type="password" class="form-control is-invalid" name="confirm_password" id="confirm_password"  onkeyup='check();' required></input>
              <br>
              <span id='message'></span>
            </div>

        <div class="mb-4 text-center">
            <button type="submit" class="btn btn-primary">Register</button>
            <div class="invalid-feedback">
              Please enter the field.
            </div>
          </div>

        </form>

      </div>
    </div>
  </div>

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