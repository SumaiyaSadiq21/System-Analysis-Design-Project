<?php
   
    if(isset($_POST['uname']) && isset($_POST['uemail']) && isset($_POST['utel']) && isset($_POST['uadd']) && isset($_POST['upass'])  && !empty($_POST['uname']) && !empty($_POST['uemail']) && !empty($_POST['utel']) && !empty($_POST['uadd']) && !empty($_POST['upass']) ){
        
        $var1=$_POST['uname'];
        $var2=$_POST['uemail'];
        
		$var3=$_POST['utel'];
        $var4=$_POST['uadd'];
		$var5=md5($_POST['upass']);
		   
        try{
            $dbcon = new PDO("mysql:host=localhost:3306;dbname=asclepious;","root","");
            $dbcon->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            
            $query="INSERT INTO customer(Name,Email,Mobile_number,Address,Password) VALUES('$var1','$var2','$var3','$var4','$var5')";
            
            try{
              
                $dbcon->exec($query);
                
                ?>
                    <script>window.location.assign('loginpage.php')</script>
                <?php
            }
            catch(PDOException $ex){
               
                ?>
                    <script>window.location.assign('signup.php')</script>
                <?php
            }
            
        }
        catch(PDOException $ex){
            ?>
                <script>window.location.assign('signup.php')</script>
            <?php
        }
    }
    else{
        ?>
            <script>window.location.assign('signup.php')</script>
    
        <?php
        
    }
?>