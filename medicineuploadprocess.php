<?php
    session_start();
    if(isset($_SESSION['useremail']) && !empty($_SESSION['useremail'])){

        if(isset($_POST['cn']) && isset($_POST['cd']) && isset($_POST['cna'])&& isset($_POST['cc'])&& !empty($_POST['cn'])&& !empty($_POST['cd'])&& !empty($_POST['cna'])&& !empty($_POST['cc'])){
            
            $var1=$_POST['cn'];
            $var2=$_POST['cd'];
            $var3=$_POST['cna'];
            $var4=$_POST['cc'];
            
            if(isset($_FILES['cimage'])){
                $var5=$_FILES['cimage'];
                ///print_r($var5);
                move_uploaded_file($var5['tmp_name'],"medicine/$var3.jpg");
            }
            
            
            try{
                ///php-mysql 3 way. We will use PDO - PHP data object
                $dbcon = new PDO("mysql:host=localhost:3306;dbname=asclepious;","root","");
                $dbcon->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                
                $sqlquery="INSERT INTO medicine(Medicine_Name,Price,Medicine_Image,Medicine_Number,Medicine_details) VALUES('$var3','$var4','medicine/$var3.jpg','$var1','$var2')";
                
                try{
                    $dbcon->exec($sqlquery);
                    ?>
                        <script>
                            window.location.assign('homepageadmin.php');
                        </script>
                    <?php
                }
                catch(PDOException $ex){
                    ?>
                        <script>
                            window.location.assign('homepageadmin.php');
                        </script>
                    <?php
                }
                
            }
            catch(PDOException $ex){
                ?>
                    <script>
                        window.location.assign('homepageadmin.php');
                    </script>
                <?php
            }
        }
        else{
            ?>
                <script>
                    window.location.assign('homepageadmin.php');
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