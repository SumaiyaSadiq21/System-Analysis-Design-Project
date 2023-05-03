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
        <title>Delivery information</title>
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

    </body>
        </html>


        <table>
                <thead>
                    <tr>
                       <th> Customer Name </th>
                        
                        <th> Delivery Address </th>
						
                        
                        <th> Contact Info</th>
						 <th> Email</th>
						
                        
                     </tr>  
						
                </thead>
                
                <tbody>
                    <?php
                        try{
                            
                            $dbcon = new PDO("mysql:host=localhost:3306;dbname=asclepious;","root","");
                            $dbcon->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                            
							
							
                            
                            $sqlquery="";
                           {
                                $sqlquery="SELECT * FROM customer ";
                            }

                            try{
                                $returnval=$dbcon->query($sqlquery); 
                                
                                $prestable=$returnval->fetchAll();
                                
                                foreach($prestable as $row){
                                    ?>
                                        <tr>
                                           
											<td><?php echo $row['Name'] ?></td>   
                                            <td><?php echo $row['Address'] ?></td> 
                                            <td><?php echo $row['Mobile_Number'] ?></td> 
											<td><?php echo $row['Email'] ?></td>    
											    
										
                                        </tr>
                                    <?php
                                }
                            }
                            catch(PDOException $ex){
                                ?>
                                    <tr>
                                        <td colspan="4">Data read error ... ...</td>    
                                    </tr>
                                <?php
                            }
                            
                        }
                        catch(PDOException $ex){
                            ?>
                                <tr>
                                    <td colspan="4">Data read error ... ...</td>    
                                </tr>
                            <?php
                        }
                    ?>
                </tbody>
            </table>

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


<style>
  table{
        border: 1px solid black;
        border-collapse: collapse;
        text-align: center;
        margin-left: 30%; /* minus the amount to make it 100% */
        
    }
    td {
    border: 1px solid black;
    border-collapse: collapse;   
    padding: 10px;
    text-align: center;
    }
    
    th{ 
    background-color: #0d6efd;
    color: white;
    border: 1px solid black;
    border-collapse: collapse;   
    padding: 5px;
    text-align: center;
    }
    
    tr:nth-child(even) {background-color: #f2f2f2;}
</style>