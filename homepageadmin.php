
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
        <title>Admin Homepage</title>
    </head>
    <body>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        <nav class="navbar navbar-expand-lg navbar-light bg-primary">
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
                        <th> Component Number</th>
                        
                        <th> Component Details</th>
						<th>Component Image</th>
                        
                        <th> Component Name</th>
						<th> Component cost</th>
                        
                       
						
                </thead>
                
                <tbody>
                    <?php
                        try{
                            
                            $dbcon = new PDO("mysql:host=localhost:3306;dbname=asclepious;","root","");
                            $dbcon->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                            
							
							
                            
                            $sqlquery="";
                           {
                                $sqlquery="SELECT * FROM medical_components ";
                            }

                            try{
                                $returnval=$dbcon->query($sqlquery); 
                                
                                $prestable=$returnval->fetchAll();
                                
                                foreach($prestable as $row){
                                    ?>
                                        <tr>
                                            <td><?php echo $row['Component_Number'] ?></td>   
                                             <td><?php echo $row['Component_details'] ?></td> 
											 
                                       								
                                            <td><a href="<?php echo $row['Component_Image'] ?>"download>
                                                <img width="150" height="150" alt="No Image found" src="<?php echo $row['Component_Image'] ?>"></a>
                                            </td>
											
											
											
                                             <td><?php echo $row['Component_Name'] ?></td> 
											   
											    <td><?php echo $row['Cost'] ?></td> 
										
                                        </tr>
                                    <?php
                                }
                            }
                            catch(PDOException $ex){
                                ?>
                                    <tr>
                                        <td colspan="5">Data read error ... ...</td>    
                                    </tr>
                                <?php
                            }
                            
                        }
                        catch(PDOException $ex){
                            ?>
                                <tr>
                                    <td colspan="5">Data read error ... ...</td>    
                                </tr>
                            <?php
                        }
                    ?>
                </tbody>
            </table>
            <br>
            <br>
            <br>
            <table>
                <thead>
                    <tr>
                        <th> Medicine Number</th>
                        
                        <th> Medicine Details</th>
						<th>Medicine Image</th>
                        
                        <th> Medicine Name</th>
						<th> Medicine cost</th>
                        
                       
						
                </thead>
                
                <tbody>
                    <?php
                        try{
                            
                            $dbcon = new PDO("mysql:host=localhost:3306;dbname=asclepious;","root","");
                            $dbcon->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                            
							
							
                            
                            $sqlquery="";
                           {
                                $sqlquery="SELECT * FROM medicine";
                            }

                            try{
                                $returnval=$dbcon->query($sqlquery); 
                                
                                $prestable=$returnval->fetchAll();
                                
                                foreach($prestable as $row){
                                    ?>
                                        <tr>
										 
                                          
											  <td><?php echo $row['Medicine_number'] ?></td>   
                                             <td><?php echo $row['Medicine_details'] ?></td> 
                                       								
                                            <td><a href="<?php echo $row['Medicine_Image'] ?>"download>
                                                <img width="150" height="150" alt="No Image found" src="<?php echo $row['Medicine_Image'] ?>"></a>
                                            </td>
											 
											<td><?php echo $row['Medicine_Name'] ?></td> 
											   
											    <td><?php echo $row['Price'] ?></td> 
											
                                            
										
                                        </tr>
                                    <?php
                                }
                            }
                            catch(PDOException $ex){
                                ?>
                                    <tr>
                                        <td colspan="5">Data read error ... ...</td>    
                                    </tr>
                                <?php
                            }
                            
                        }
                        catch(PDOException $ex){
                            ?>
                                <tr>
                                    <td colspan="5">Data read error ... ...</td>    
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
    padding: 0px;
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

