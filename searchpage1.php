<?php
 
 session_start();
 
 $connect = mysqli_connect("localhost", "root", "", "asclepious");
 if(isset($_POST["add_to_cart"]) && isset($_GET['param2']) && !empty($_GET['param2']))
 {
      if(isset($_SESSION["shopping_cart"]))
      {
         $item_array_id = array_column($_SESSION["shopping_cart"],"item_Medicine_number");
         if(!in_array($_GET["Medicine_number"],$item_array_id))
         {
              $count = count($_SESSION["shopping_cart"]);
              $item_array = array(

               'item_Medicine_number' => $_GET["Medicine_number"],

          'item_Medicine_Name' => $_POST["hidden_name"],
          'item_Price' => $_POST["hidden_price"],
          'item_quantity' => $_POST["quantity"]       
      );

     $_SESSION["shopping_cart"] [$count] =$item_array;

     }
         else
         {
           echo '<script>alert("Item Already Added")</script>';
           echo '<script>window.location="viewmedicine.php"</script>';
         }

      }
      else
      {
        $item_array = array (
             'item_Medicine_number' => $_GET["Medicine_number"],

          'item_Medicine_Name' => $_POST["hidden_name"],
          'item_Price' => $_POST["hidden_price"],
          'item_quantity' => $_POST["quantity"]       
      );
       $_SESSION["shopping_cart"] [0] = $item_array;

      }

 }
 if(isset($_GET["action"]))
 {
      if($_GET["action"] == "delete")
      {
           foreach($_SESSION["shopping_cart"] as $keys => $values)

           {
                if($values["item_id"] == $_GET["Medicine_number"])
                {
                     unset($_SESSION["shopping_cart"] [$keys]);
                     echo '<script>alert("Item Removed")</script>';
                     echo'<script>window.location="viewmedicine.php"</script>';
                }
           }

      }
 }

  

 ?>  
 

       
 
 
 
 
 
 

<!DOCTYPE html>
<html>
<head>
<title> Search Page </title>
<script src="https:// ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
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
                <!-- Search BOX-->
          <input type="search" id="searchbox">
            <input type="button" value="Search" id="searchbtn">
            <br>
            <br>
            <script>
                var srcbtn=document.getElementById('searchbtn');
                srcbtn.addEventListener('click', searchprocess);
                
                function searchprocess(){
                    var searchvalue=document.getElementById('searchbox').value;
                    window.location.assign("searchpage.php?param1="+searchvalue);
                }
                
            </script>
          </input>       
                        
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            <i class="bi bi-menu-button-wide-fill"></i>
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
               <li><a class="dropdown-item" href="homepage.php">Home</a></li>   
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

<br><br>
<div class= "container" style=" display: grid; grid-template-columns: auto auto auto; align-content: space-between;">


<?php
$searchval1=$_GET['param2'];
$query= "SELECT * FROM medicine where Medicine_Name LIKE '%$searchval1%' || Medicine_details LIKE '%$searchval1%'";

$result =mysqli_query($connect, $query);
if(mysqli_num_rows($result) > 0)
{
    while ($row = mysqli_fetch_array($result))
    {
        
        ?>
        <div class= "col_md-4">
            <form method= "post" action ="viewmedicine.php?action=add&Medicine_number=<?php echo $row["Medicine_number"]; ?>">
            <div style="border:1px solid #333; background-color:#f1f1f1; border-radius:5px; padding:16px; width:300px;" align="center">
            <img src="<?php echo $row["Medicine_Image"]; ?>"width="100" height="120" />
            <h4 class="text-info"><?php echo $row ["Medicine_Name"]; ?></h4>
            <h4 class="text-danger">Tk <?php echo $row ["Price"]; ?></h4>
            <input type="text" name="quantity" class="form-control" value="1" />
            <input type="hidden" name="hidden_name" value="<?php echo $row["Medicine_Name"]; ?>"
            />  
           <input type="hidden" name="hidden_price" value="<?php echo $row["Price"]; ?>" 
           />  
            <input type="submit" name="add_to_cart" style="margin-top:5px;" class="btn btn-primary" value="Add to Cart" />  
          </div>  
         </form>  
                 
    </div>
    <?php
    }
}  
?>  
<br><br>
<div style="clear:both"></div>  

</div>  
      <br /> 
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


            
   
   



























