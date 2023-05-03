<?php
    session_start();
    if(isset($_SESSION['useremail']) && !empty($_SESSION['useremail'])){

        if(isset($_POST['pa']) && isset($_POST['pm']) && !empty($_POST['pa']) && !empty($_POST['pm'])){
            
            $var1=$_POST['pa'];
            $var3=$_POST['pm'];
            
            if(isset($_FILES['pimage'])){
                $var2=$_FILES['pimage'];
                ///print_r($var4);
                move_uploaded_file($var2['tmp_name'],"prescriptions/$var3+$var1.jpg");
            }
            
            
            try{
                ///php-mysql 3 way. We will use PDO - PHP data object
                $dbcon = new PDO("mysql:host=localhost:3306;dbname=asclepious;","root","");
                $dbcon->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                
                $sqlquery="INSERT INTO prescription_upload(Patient_Name,Prescription,CustomerEmail,Details) VALUES('$var1','prescriptions/$var3+$var1.jpg','$_SESSION[useremail]','$var3')";
                
                try{
                    $dbcon->exec($sqlquery);
                    ?>
                        <script>
                            window.location.assign('homepage.php');
                        </script>
                    <?php
                }
                catch(PDOException $ex){
                    ?>
                        <script>
                            window.location.assign('homepage.php');
                        </script>
                    <?php
                }
                
            }
            catch(PDOException $ex){
                ?>
                    <script>
                        window.location.assign('homepage.php');
                    </script>
                <?php
            }
        }
        else{
            ?>
                <script>
                    window.location.assign('homepage.php');
                </script>
            <?php
        }
    }
    else{
        ?>
            <script>
                window.location.assign('loginpage.php');
            </script>
        <?php
    }
?>