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
        <title>Medicine Upload</title>
    </head>
    <body>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Asclepious | ADMIN PANEL</a>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                </div>
            </div>
        </nav>
        
        <a class="btn btn-light btn-lg" data-bs-toggle="offcanvas" href="#offcanvasExample" role="button" aria-controls="offcanvasExample">
        <i class="bi bi-list"></i> Menu
        </a>
      
      <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
        <div class="offcanvas-header">
          <h5 class="offcanvas-title" id="offcanvasExampleLabel">Menu</h5>
          <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            <ul class="list-group">
                <li><a class="list-group-item" href="viewadminprescription.php"> View Prescriptions</a></li>
                <li><a class="list-group-item" href="uploadmedicine.php">Upload Medicine</a></li>
                <li><a class="list-group-item" href="uploadcomponents.php">Upload Components</a></li>
                <li><a class="list-group-item" href="viewadmindeliveryinfo.php">View Customer Delivery information</a></li>
                <li><a class="list-group-item active" aria-current="true" href="logoutprocess.php">Log Out</a></li>
            </ul>
        </div>
      </div>

      <!-- contact form -->
  <!-- form-control, form-label, form-select, input-group, input-group-text -->
 
    <div class="container-lg">
      <div class="row justify-content-center my-5">
        <div class="col-lg-6">
          
          <form action="medicineuploadprocess.php" method="post" enctype="multipart/form-data" class="was-validated">

            <div class="mb-3">
            <label for="validationTextarea" class="form-label">Medicine Number:</label>
            <textarea class="form-control is-invalid" id="validationTextarea"  name="cn" required placeholder="Enter Medicine Number" required></textarea>
            <div class="invalid-feedback">
              Please enter the field.
            </div>
          </div>
          <div class="mb-3">
            <label for="validationTextarea" class="form-label">Medicine Details: </label>
            <textarea class="form-control is-invalid" id="validationTextarea" name="cd" required placeholder="Enter Medicine Details" required></textarea>
            <div class="invalid-feedback">
              Please enter the field.
            </div>
          </div>

          <div class="mb-3">
            <label for="validationTextarea" class="form-label">Medicine Image: </label>
            <input type="file" class="form-control"  name="cimage" aria-label="file example" required>
            <div class="invalid-feedback">
            Example invalid form file feedback
            </div>
          </div>

          <div class="mb-3">
            <label for="validationTextarea" class="form-label">Medicine Name:</label>
            <textarea class="form-control is-invalid" id="validationTextarea" name="cna" required placeholder="Enter Medicine Name" required></textarea>
            <div class="invalid-feedback">
              Please enter the field.
            </div>
          </div>

          <div class="mb-3">
            <label for="validationTextarea" class="form-label">Medicine Price:</label>
            <textarea class="form-control is-invalid" id="validationTextarea" name="cc" required placeholder="Enter Medicine Price" required></textarea>
            <div class="invalid-feedback">
              Please enter the field.
            </div>
          </div>

            <div class="mb-4 text-center">
              <button type="submit" class="btn btn-primary">Upload</button>
            </div>
          </form>
        </div>
      </div>
    </div>

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
	
	
	
	