<style>
    table, th, td{
        border: 1px solid black;
        border-collapse: collapse;
        text-align: center;
    }
    
    tr:hover{
        background-color: White;
    }
</style>



<?php
    session_start();

    if(isset($_SESSION['useremail']) && !empty($_SESSION['useremail'])){
        ?>

<center>
<h1> <b>Asclepious</b></h1>
</center>

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
										 <td><?php echo $row['Medicine_Name'] ?></td> 
											   
											    <td><?php echo $row['Price'] ?></td> 
                                          
											 
                                       								
                                            <td><a href="<?php echo $row['Medicine_Image'] ?>"download>
                                                <img width="150" height="150" alt="No Image found" src="<?php echo $row['Medicine_Image'] ?>"></a>
                                            </td>
											  <td><?php echo $row['Medicine_number'] ?></td>   
                                             <td><?php echo $row['Medicine_details'] ?></td> 
											
											
                                            
										
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
            <input type="button" value="Logout" id="logoutbtn">

            <script>
                var elm=document.getElementById('logoutbtn');
                elm.addEventListener('click', processlogout);
                
                function processlogout(){
                    window.location.assign('logoutprocess.php');
                }
                
            </script>

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